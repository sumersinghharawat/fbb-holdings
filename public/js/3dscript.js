let scene;
let camera;
let renderer;


function main()
{
    const canvas = document.querySelector('#c');


    scene = new THREE.Scene();

    camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 2;
    scene.add(camera);

    renderer = new THREE.WebGLRenderer({canvas: canvas, antialias: true,});
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    renderer.autoClear = false;
    renderer.setClearColor(0x00000, 0.0);

    // create earthgeometry
    const earthgeometry = new THREE.SphereGeometry(0.3,32,32);
    const eatrhmaterial = new THREE.MeshPhongMaterial({
        roughness : 1,
        metalness:0,
        map: THREE.ImageUtils.loadTexture('./fs-globe.jpg'),
    });

    const earthmesh = new THREE.Mesh(earthgeometry,eatrhmaterial);

    scene.add(earthmesh);

    // set ambientlight
    const ambientlight = new THREE.AmbientLight(0xffffff,  1);
    scene.add(ambientlight);

    const orbitControls = new THREE.OrbitControls(
        camera,
        renderer.domElement,
        {enableZoom:false}
    );
      orbitControls.minDistance = 1;
      orbitControls.maxDistance = 1;
      orbitControls.autoRotate = true;
      orbitControls.autoRotateSpeed = 1.0;
      orbitControls.noPan = true;

    // country
    // Assuming you already have a Three.js scene and renderer set up
    // ...

    // Load country data (example data)
    const countryData = [
        { name: "Cyprus", lat: 38.5, lon: 146 },
        { name: "Jordan", lat: 34, lon: 142 },
        { name: "Egypt", lat: 32, lon: 156 },
        { name: "Libya", lat: 33, lon: 166 },
        { name: "Bahrain", lat: 32, lon: 130 },
        { name: "UAE", lat: 25, lon: 123 },
        // ...
    ];

    // Create a group to hold the country markers
    var markersGroup = new THREE.Group();
    scene.add(markersGroup);

    // Loop through country data and create markers
    countryData.forEach(country => {
        // Create a sphere geometry for the country marker
        const markerGeometry = new THREE.SphereGeometry(0.01, 32, 32);

        // Create a material for the country marker
        const markerMaterial = new THREE.MeshBasicMaterial({ color: 0x000000 });

        // Create a mesh from the geometry and material
        const markerMesh = new THREE.Mesh(markerGeometry, markerMaterial);

        // Convert latitude and longitude to Cartesian coordinates
        const latRad = (90 - country.lat) * Math.PI / 180;
        const lonRad = (country.lon + 180) * Math.PI / 180;
        const radius = 0.29; // radius of the sphere
        const x = radius * Math.sin(latRad) * Math.cos(lonRad);
        const y = radius * Math.cos(latRad);
        const z = radius * Math.sin(latRad) * Math.sin(lonRad);

        // Set the position of the marker mesh
        markerMesh.position.set(x, y, z);

        // Add the marker mesh to the markers group
        markersGroup.add(markerMesh);

        // Create a text sprite for displaying country names
        const sprite = createTextSprite(country.name);

        // Set the position of the text sprite slightly above the marker
        sprite.position.set(x+0.02, y + 0.03, z- 0.03);

        // Add the text sprite to the markers group
        markersGroup.add(sprite);

        // Add event listener for hover effect
        markerMesh.addEventListener('mouseover', () => {
            // Scale up the marker mesh on hover
            markerMesh.scale.set(1.2, 1.2, 1.2);

            // Set a different color for the marker material on hover
            markerMaterial.color.set(0x000000);

            // Set the text sprite visibility to true on hover
            sprite.visible = true;
        });

        // Add event listener for mouseout event
        markerMesh.addEventListener('mouseout', () => {
            // Reset the scale of the marker mesh on mouseout
            markerMesh.scale.set(1, 1, 1);

            // Reset the color of the marker material on mouseout
            markerMaterial.color.set(0x000000);

            // Set the text sprite visibility to false on mouseout
            sprite.visible = false;
        });
    });

    const animate = () =>{
        requestAnimationFrame(animate);
        // earthmesh.rotation.y += 0.0015;
        render();
        orbitControls.update();
    }
    const render = () => {
        updateTextSpritePosition();
        renderer.render(scene,camera);
    }

    animate();
}

function createTextSprite(text) {
    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d');
    const fontSize = 24;
    context.font = `${fontSize}px Arial`;
    const textWidth = context.measureText(text).width;
    const canvasWidth = textWidth + 10;
    const canvasHeight = fontSize + 10;
    canvas.width = canvasWidth;
    canvas.height = canvasHeight;
    context.font = `${fontSize}px Arial`;
    context.fillStyle = '#000000';
    context.fillText(text, 0, fontSize);

    // Create a texture from the canvas
    const texture = new THREE.Texture(canvas);
    texture.needsUpdate = true;

    // Create a sprite material using the texture
    const spriteMaterial = new THREE.SpriteMaterial({ map: texture });

    // Create a sprite mesh from the material
    const sprite = new THREE.Sprite(spriteMaterial);

    // Set the scale of the sprite to match the canvas size
    sprite.scale.set(canvasWidth / 2000, canvasHeight / 2000, 1);

    return sprite;
  }

  // Update the text sprite position on every frame
  function updateTextSpritePosition() {

    var markersGroup = new THREE.Group();

    // Convert the 3D position of the markers group to 2D screen coordinates
    const vector = new THREE.Vector3();
    const canvas = renderer.domElement;
    markersGroup.children.forEach(marker => {
      vector.setFromMatrixPosition(marker.matrixWorld);
      vector.project(camera);

      // Map the 2D screen coordinates to CSS coordinates
      vector.x = (vector.x * 10 + 0.5) * canvas.width;
      vector.y = -(vector.y * 10 - 0.5) * canvas.height;

      // Update the position of the text sprite
      const sprite = marker.children[1]; // Assuming the text sprite is the second child of the marker
      sprite.position.set(vector.x, vector.y, 0);
    });
  }

window.onload = main;
