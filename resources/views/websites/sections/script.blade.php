
<script src="{{ asset('./js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('./js/aos.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src="{{ asset('./js/script.js') }}"></script>
<script>
    var url = "{{ route('changeLang') }}";
    const buttons = document.querySelectorAll('.changeLang');

    buttons.forEach(button => {
        button.addEventListener('click', handleClick);
    });

    // define the event listener function
    function handleClick(e) {
        // console.log(e.target.value);
        window.location.href = url + "?lang="+ e.target.value;
    }

    // popupform
    $(document).ready(function() {
        $("#popupformaction").submit((e)=>{
            e.preventDefault();

            if($('#popupformaction #name').val() == ""){
                $("#popupformaction").prepend('<div class="alert alert-danger">Name field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }

            if($('#popupformaction #email').val() == ""){
                $("#popupformaction").prepend('<div class="alert alert-danger">Email field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }

            if($('#popupformaction #phonenumber').val() == ""){
                $("#popupformaction").prepend('<div class="alert alert-danger">Phone number field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }

            if($('#popupformaction #message').val() == ""){
                $("#popupformaction").prepend('<div class="alert alert-danger">Message field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }


            var formData = {
                'name': $('#popupformaction #name').val(),
                'email': $('#popupformaction #email').val(),
                'phonenumber': $('#popupformaction #phonenumber').val(),
                'message': $('#popupformaction #message').val(),
                '_token': $('#popupformaction #token').val()
            };

            $("#popupformaction").prepend('<div class="alert alert-warning">Loading...</div>');
            $("#popupformaction .btn-golden").attr('disable',true);


            $.ajax({
                type: 'POST',
                url: '{{ route("send-email") }}', // replace with your server-side script
                data: formData,
                dataType: 'json', // expected response data type
                encode: true
            })
            .done(function(data) {


                $(".alert-warning").hide();

                $("#popupformaction").prepend('<div class="alert alert-success">'+data+'</div>');
                $('#popupformaction #name').val("");
                $('#popupformaction #email').val("");
                $('#popupformaction #phonenumber').val("");
                $('#popupformaction #message').val("");

                setTimeout(() => {
                    $(".alert-success").hide()
                },2000);
                $("#popupformaction .btn-golden").attr('disable',false);

            })
            .fail(function(data) {
                console.error(data); // log any errors to the console
            });
        });
    });


    // contactform
    $(document).ready(function() {
        $("#contactformaction").submit((e)=>{
            e.preventDefault();

            if($('#contactformaction #name').val() == ""){
                $("#contactformaction").prepend('<div class="alert alert-danger">Name field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }

            if($('#contactformaction #email').val() == ""){
                $("#contactformaction").prepend('<div class="alert alert-danger">Email field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }

            if($('#contactformaction #phonenumber').val() == ""){
                $("#contactformaction").prepend('<div class="alert alert-danger">Phone number field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }

            if($('#contactformaction #message').val() == ""){
                $("#contactformaction").prepend('<div class="alert alert-danger">Message field is empty!</div>');

                setTimeout(() => {
                    $(".alert-danger").hide()
                },2000);
                return false;
            }


            var formData = {
                'name': $('#contactformaction #name').val(),
                'email': $('#contactformaction #email').val(),
                'phonenumber': $('#contactformaction #phonenumber').val(),
                'message': $('#contactformaction #message').val(),
                '_token': $('#contactformaction #token').val()
            };

            $("#contactformaction").prepend('<div class="alert alert-warning">Loading...</div>');
            $("#contactformaction .btn-golden").attr('disable',true);

            $.ajax({
                type: 'POST',
                url: '{{ route("send-email") }}', // replace with your server-side script
                data: formData,
                dataType: 'json', // expected response data type
                encode: true
            })
            .done(function(data) {

                $(".alert-warning").hide();

                $("#contactformaction").prepend('<div class="alert alert-success">'+data+'</div>');
                $('#contactformaction #name').val("");
                $('#contactformaction #email').val("");
                $('#contactformaction #phonenumber').val("");
                $('#contactformaction #message').val("");

                setTimeout(() => {
                    $(".alert-success").hide()
                },2000);
                $("#contactformaction .btn-golden").attr('disable',false);

            })
            .fail(function(data) {
                console.error(data); // log any errors to the console
            });
        });
    });

</script>

@if (Route::current()->uri() == 'about-us' || Route::current()->uri() == '/')
<script>

let scene;
let camera;
let renderer;


function main()
{
    const canvas = document.querySelector('#c');


    scene = new THREE.Scene();

    camera = new THREE.PerspectiveCamera(45,1, 0.1, 1000);
    camera.position.z = 2;
    targetRotation = camera.quaternion;

    // Invert rotation
    targetRotation.inverse();

    camera.rotation.set(0.8, 180, 0.5);

    scene.add(camera);

    renderer = new THREE.WebGLRenderer({canvas: canvas, antialias: true,});

    if(window.outerWidth <= 768){
        renderer.setSize(350, 350);
    }else{
        renderer.setSize(900, 900);
    }


    renderer.setPixelRatio(window.devicePixelRatio);

    renderer.autoClear = false;
    renderer.setClearColor(0x00000, 0.0);

    // create earthgeometry
    const earthgeometry = new THREE.SphereGeometry(0.3,32,32);
    const eatrhmaterial = new THREE.MeshPhongMaterial({
        roughness : 1,
        metalness:0,
        map: THREE.ImageUtils.loadTexture('{{ asset("./img/fs-globe.jpg") }}'),
    });

    const earthmesh = new THREE.Mesh(earthgeometry,eatrhmaterial);

    // Set sphere's rotation
    earthmesh.quaternion.copy(targetRotation);

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
    //   orbitControls.autoRotate = true;
      orbitControls.autoRotateSpeed = 1.0;
      orbitControls.noPan = true;

    // country
    // Assuming you already have a Three.js scene and renderer set up
    // ...

    // Load country data (example data)

    @php
        $website_globe_locations = json_decode($website->globe_locations);
        foreach($website_globe_locations as $website_globe_locationkey => $website_globe_location){
            if($website_globe_location->status == 0){
                unset($website_globe_locations[$website_globe_locationkey]);
            }
        }

        $website_globe_locations = array_values($website_globe_locations);
    @endphp
    const countryData = @php echo htmlspecialchars_decode(json_encode($website_globe_locations)); @endphp

    // const countryData = [
    //     { name: "Cyprus", lat: 12, lon: 261 },
    //     { name: "Jordan", lat: 9, lon: 259.4 },
    //     { name: "Egypt", lat: 7, lon: 266 },
    //     { name: "Libya", lat: 10, lon: 273 },
    //     { name: "Bahrain", lat: 3, lon: 251 },
    //     { name: "UAE", lat: 0.3, lon: 248 },
    //     { name: "Belgium", lat: 31, lon: 272 },
    //     { name: "Germany", lat: 29.5, lon: 270 }
    // ];

    // [{"name":"Cyprus","lat":12,"lon":261,"status":1},{"name":"Jordan","lat":9,"lon":259.4,"status":1},{"name":"Egypt","lat":7,"lon":266,"status":1},{"name":"Libya","lat":10,"lon":273,"status":1},{"name":"Bahrain","lat":3,"lon":251,"status":1},{"name":"UAE","lat":0.3,"lon":248,"status":1},{"name":"Belgium","lat":31,"lon":272,"status":1},{"name":"Germany","lat":29,"lon":270,"status":1}]



    // Create a group to hold the country markers
    var markersGroup = new THREE.Group();
    scene.add(markersGroup);

    // Loop through country data and create markers
    countryData.forEach(country => {
        // Create a sphere geometry for the country marker
        const markerGeometry = new THREE.CircleGeometry(0.1, 1);

        // Create a material for the country marker
        var textureLoader = new THREE.TextureLoader();

        var texture = textureLoader.load('{{ asset("./img/svg/point.svg") }}');

        const markerMaterial = new THREE.SpriteMaterial({ color: "#fff", map: texture });

        // Create a mesh from the geometry and material
        // const markerMesh = new THREE.Mesh(markerGeometry, markerMaterial);

        const spriteNew = new THREE.Sprite(markerMaterial);

        // Convert latitude and longitude to Cartesian coordinates
        const latRad = (90 - country.lat) * Math.PI / 180;
        const lonRad = (country.lon + 180) * Math.PI / 180;
        const radius = 0.35; // radius of the sphere
        const x = radius * Math.sin(latRad) * Math.cos(lonRad);
        const y = radius * Math.cos(latRad);
        const z = radius * Math.sin(latRad) * Math.sin(lonRad);

        // Set the position of the marker mesh
        spriteNew.position.set(x, y, z-.05);


        spriteNew.scale.set(0.01, 0.01, 0.02);
        // Add the marker mesh to the markers group
        markersGroup.add(spriteNew);

        // Create a text sprite for displaying country names
        const sprite = createTextSprite(country.name);

        // Set the position of the text sprite slightly above the marker

        switch (country.name) {
            case "Belgium":
                sprite.position.set(x, y+0.005, z);
                break;

            case "Germany":
                sprite.position.set(x+0.03, y-0.01, z);
            break;

            default:
                sprite.position.set(x+0.01, y+0.01, z);
                break;
        }

        // Add the text sprite to the markers group
        markersGroup.add(sprite);

        // Add event listener for hover effect
        // spriteNew.addEventListener('mouseover', () => {
        //     console.log("hello");

        //     var rect = canvas.getBoundingClientRect();
        //     var x = event.clientX - rect.left;
        //     var y = event.clientY - rect.top;

        //     if (ctx.isPointInPath(x, y)) {
        //         canvas.style.cursor = "pointer";
        //     } else {
        //         canvas.style.cursor = "default";
        //     }

        //     // Scale up the marker mesh on hover
        //     // markerMesh.scale.set(1.2, 1.2, 1.2);

        //     // Set a different color for the marker material on hover
        //     // markerMaterial.color.set(0x000000);

        //     // Set the text sprite visibility to true on hover
        //     // sprite.visible = true;
        // });

        // // Add event listener for mouseout event
        // spriteNew.addEventListener('mouseout', () => {
        //     // Reset the scale of the marker mesh on mouseout
        //     spriteNew.scale.set(1, 1, 1);

        //     // Reset the color of the marker material on mouseout
        //     markerMaterial.color.set(0x000000);

        //     // Set the text sprite visibility to false on mouseout
        //     sprite.visible = false;
        // });
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
    context.fillStyle = '#012C2F';
    context.fillRect(0, 0, canvas.width, canvas.height);


    context.fillStyle = '#fff';
    context.fillText(text, 5, fontSize);

    // Create a texture from the canvas
    const texture = new THREE.Texture(canvas);
    texture.needsUpdate = true;

    // Create a sprite material using the texture
    const spriteMaterial = new THREE.SpriteMaterial({ map: texture });

    // Create a sprite mesh from the material
    const sprite = new THREE.Sprite(spriteMaterial);

    // Set the scale of the sprite to match the canvas size

    if(window.outerWidth <= 768){
        sprite.scale.set(canvasWidth / 1500, canvasHeight / 1500, 1);
    }else{
        sprite.scale.set(canvasWidth / 2500, canvasHeight / 2500, 0.1);
    }
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





</script>
@endif
@if (Route::current()->uri() != 'about-us')
<script>
    // swiper element
    const swiperEl = document.querySelector('swiper-container');

    if(swiperEl){
        // swiper parameters
        const swiperParams = {
            slidesPerView: 1,
            breakpoints: {
                640: {
                slidesPerView: 2,
                },
                1024: {
                slidesPerView: 3,
                },
            },
            loop: true,
            autoplay: true,
            effect: 'slide',
            speed: 5000,
            delay: 0
        };
        // now we need to assign all parameters to Swiper element
        Object.assign(swiperEl, swiperParams);

        // and now initialize it
        swiperEl.initialize();
    }
  </script>
@endif
