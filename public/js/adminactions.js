
function header_logo_submit(event){
    event.preventDefault();
    var elements = document.getElementsByClassName("header_logo");
    var formData = new FormData();
    for(var i=0; i<elements.length; i++)
    {
        formData.append(elements[i].name, elements[i].value);
    }
    var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
                alert(xmlHttp.responseText);
            }
        }
        xmlHttp.open("post", "server.php");
        xmlHttp.send(formData);
    return false;
}
console.log("test");
