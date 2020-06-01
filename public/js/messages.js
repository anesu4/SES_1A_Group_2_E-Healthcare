//require('../../../resources/js/bootstrap'); // im too scared to delete this incase it needs to come bak :(

// loads the buttons when the browser loads
window.onload = function(){
    getObj();
}
// stores the doctors names and their messages
var doctors = [
    {
        name: "Dr. Aiden Boal",
        messageHistory: "Hi How can I help you?",
    },
    {
        name: "Dr. Bryan Lifschitz",
        messageHistory: "How can I be of service?",
    },
    {
        name: "Dr. Ethel Podany",
        messageHistory: "Can I help you with anything?",
    },
    {
        name: "Dr. Fabian Sanderford",
        messageHistory: "How are you?",
    },
    {
        name: "Dr. Gage Wildridge",
        messageHistory: "Hi my name is Dr. Wildridge, how can I help?",
    }
]

// create the buttons
function getObj() {
    return buttons =  [
        new InboxButton(doctors[0].name, doctors[0].messageHistory),
        new InboxButton(doctors[1].name, doctors[1].messageHistory),
        new InboxButton(doctors[2].name, doctors[2].messageHistory),
        new InboxButton(doctors[3].name, doctors[3].messageHistory),
        new InboxButton(doctors[4].name, doctors[4].messageHistory)
    ]
}

//  document.getElementById('message-recieved')
var doctorMessages = ["Hi, how can i help", "sure thing", "not currently"]
var patientMessages =  ["Hi, I would like to book an appointment", "are you available tomorrow", "devo"]

//create buttons
class InboxButton {
    constructor(name, message) {
        // create elements
        var btnParent = document.createElement("button");
        var btnSpan = document.createElement("span");
        var btnH = document.createElement("h5");

        btnParent.addEventListener('click', function() { 
            document.getElementById("receieverName").innerHTML=name;
            loadMessage(message);
        }, false);

        // attach css
        btnParent.className = "btn btn-block";
        btnParent.setAttribute("style", "height:75px; overflow:hidden;");
        btnH.className = "text-left";
        
        //append elements
        btnParent.appendChild(btnSpan);
        btnSpan.appendChild(btnH);
        btnH.innerHTML = name;
        document.getElementById("inbox").appendChild(btnParent);
    }
}
// loads messages existing in the doctors array
var hasHistory = false;
function loadMessage(message){
    if(hasHistory){
        document.getElementById("history").innerHTML = "";
    }
    messageIn(message);
    hasHistory = true;
}
// creates message div to recieve
function messageIn(message){
    var messageDiv = document.createElement("div"); // create <div>
    messageDiv.style.clear = 'both';
    messageDiv.className = "inbox-message in";
    // create text for message div
    var messageP = document.createElement("p"); //create <p> tag
    
    // append text to message div
    messageDiv.appendChild(messageP); // add <p> to <div>
    messageP.appendChild(document.createTextNode(message)); // insert text into <p>
    //append message div to chat history
    document.getElementById("history").appendChild(messageDiv);
}
// creates message div to be sent
function messageOut(message,file){
    var messageDiv = document.createElement("div"); // create <div>
    messageDiv.style.clear = 'both';
    messageDiv.className = "inbox-message out";
    // create text for message div
    var messageP = document.createElement("p"); //create <p> tag

    // if file exists, create file for message div
    if(file){
        console.log("fdsfs");
        var a = document.createElement("a");
        a.appendChild(document.createTextNode(message));
        a.href= file;
        a.download = file;
        //append file to message div
        messageP.appendChild(a);
        messageDiv.appendChild(a);
    }
    
    // append text to message div
    messageDiv.appendChild(messageP); // add <p> to <div>
    messageP.appendChild(document.createTextNode(message)); // insert text into <p>
    document.getElementById("history").appendChild(messageDiv); // add message <div> to <div class="chat-history" id="history">
}
// handles the messages to be sent
function sendMessage(){
    var file = document.getElementById("sendFileBtn");
    if(document.getElementById("textOut").value != "" && file.value != ""){
        messageOut(document.getElementById("textOut").value, file);
        document.getElementById("textOut").value="";
    }
    if(document.getElementById("textOut").value != ""){
        messageOut(document.getElementById("textOut").value);
        document.getElementById("textOut").value="";
    }
    
    if(file.value != ""){ // if file is not empty   
        deleteFile();
    }
}
// sets the name of input file
var file = document.getElementById("sendFileBtn").onchange = function(event){ // checks for change in file selection
    var filename = document.getElementById("sendFileBtn").value.split(/(\\|\/)/g).pop(); // gets rid of path /../../
    if(filename.length > 7) filename = filename.substring(0,7); // sets length to appropriate size so css is good
    document.getElementById("fileName").innerHTML= filename; // set span to filename
    //document.getElementById("textOut").value = document.getElementById("sendFileBtn").value.split(/(\\|\/)/g).pop();

    // awaken the file remove button
    if(file){
        // if file is selected then open the delete button
        document.getElementById("removeFileBtn").setAttribute("style", " opacity: 100; cursor: pointer; ");
        document.getElementById("removeFileBtn").disabled = false;

        // read file input
        var input = event.target;
        var reader = new FileReader();
        // create img tag to upload file
        var x = document.createElement("img");
        x.setAttribute("style","width:100px;float: right;")
        reader.onload = function(){
            var dataURL = reader.result;
            //document.getElementById('output').src = dataURL;
            x.className=""
            x.src = dataURL;
            document.getElementById("history").appendChild(x);
        };
        reader.readAsDataURL(input.files[0]);

        //messageOut(x);

        // listen for delete button press
        document.getElementById("removeFileBtn").addEventListener("click", function(){
            document.getElementById('output').src = "";
            x.src="";
          });
    }
}
// delete file selected
var isDeleteFilePressed = false;
function deleteFile(){
    if(file){
        document.getElementById("sendFileBtn").value = ""; // reset file to nothing
        document.getElementById("fileName").innerHTML= ""; // reset span to nothing
        document.getElementById("removeFileBtn").setAttribute("style", "opacity: 0; cursor: default; ");
        document.getElementById("removeFileBtn").disabled = true;
        isDeleteFilePressed = true;
    }
}

// function onFileSelected(event) {
//     var selectedFile = event.target.files[0];
//     var reader = new FileReader();
  
//     var imgtag = document.getElementById("myimage");
//     imgtag.title = selectedFile.name;
  
//     reader.onload = function(event) {
//       imgtag.src = event.target.result;
//     };
  
//     reader.readAsDataURL(selectedFile);
//   }



