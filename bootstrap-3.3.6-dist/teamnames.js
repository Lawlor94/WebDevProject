var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
    var xmlHttp;
    
    if(window.ActiveXObject){
        try{
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            xmlHttp = false;
        }
    }else{
        try{
            xmlHttp = new XMLHttpRequest();
        }catch(e){
            xmlHttp = false;
        }
    }
    
    if(!xmlHttp)
        alert("Cannot create Object");
    else
        return xmlHttp;
}

function process(){
    if(xmlHttp.readyState==0|| xmlHttp.readyState==4){
        team = encodeURIComponent(document.getElementById("userInput").value);
        xmlHttp.open("GET", "teamnames.php?team=" + team, true);
        xmlHttp.onreadystatechange = handleServerResponse;
        xmlHttp.send(null);
    }else{
        setTimeout('process()',1000);
    }
}

function handleServerResponse(){
    if(xmlHttp.readyState==4){
        if(xmlHttp.status==200){
            xmlResponse = xmlHttp.responseXML;
            xmlDocumentElement = xmlResponse.documentElement;
            message = xmlDocumentElement.firstChild.data;
            document.getElementById("displayResults").innerHTML = '<span style="color:blue">' + message + '</span>';
            setTimeout('process()',1000);
        }else{
            alert('Error: something has gone wrong');
        }
    }
}