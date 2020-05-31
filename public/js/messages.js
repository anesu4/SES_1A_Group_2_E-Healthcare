//require('../../../resources/js/bootstrap');

window.onload = function(){
    createButtons();
}

var doctorNames =  [
    "Dr. Aiden Boal",
    "Dr. Bryan Lifschitz",
    "Dr. Ethel Podany",
    "Dr. Fabian Sanderford",
    "Dr. Gage Wildridge"
]

class Doctor {
    constructor(DrName, message) {
        this.name = DrName;
        this.messagesHistory = message;
        //console.log(messagesHistory);
        messageIn(message);

        //this.button = button;
        // button.onclick = loadMessages(name);
    }
}


function createButtons() {
    var doctors = [
        new Doctor("Dr. Aiden Boal","Hi how are you?",),
        new Doctor("Dr. Bryan Lifschitz","How can I help you?"),
        new Doctor("Dr. fdsgfdsg Podany","Wanna go fam"),
        new Doctor("Dr. Ethegfdsgfdgfdsgl Podany","Wanna go fam"),
        new Doctor("Dr. Ethel gfdsgfdsgdfs","fgsgsfdgsdd")
]
    var buttons =  [
        new InboxButton(doctors[0].name),
        new InboxButton(doctors[1].name),
        new InboxButton(doctors[2].name),
        new InboxButton(doctors[3].name),
        new InboxButton(doctors[4].name)
    ]
}

//  document.getElementById('message-recieved')
var doctorMessages = ["Hi, how can i help", "sure thing", "not currently"]
var patientMessages =  ["Hi, I would like to book an appointment", "are you available tomorrow", "devo"]

//create buttons
class InboxButton {
    constructor(name) {
        //asssign on clicks
        this.btnName = name;
        //this.messagePreview = messagePreview;
        // create elements
        var btnParent = document.createElement("button");
        var btnSpan = document.createElement("span");
        var btnH = document.createElement("h5");
        //var btnP = document.createElement("p");
        //var textNode = document.createTextNode(name);
        //this.messagePreview = document.createTextNode(messagePreview);
        // attach stylesheets
        btnParent.className = "btn btn-block";
        btnParent.setAttribute("style", "height:75px; overflow:hidden;");
        btnH.className = "text-left";
        //btnP.className = "text-left";
        //append elements
        btnParent.appendChild(btnSpan);
        btnSpan.appendChild(btnH);
        //btnSpan.appendChild(btnP);
        btnH.innerHTML = name;
        //btnP.innerHTML = "doctors[0].messagesHistory";
        document.getElementById("inbox").appendChild(btnParent);
    }
}

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

function messageOut(message){
    var messageDiv = document.createElement("div"); // create <div>
    messageDiv.style.clear = 'both';
    messageDiv.className = "inbox-message out";
    // create text for message div
    var messageP = document.createElement("p"); //create <p> tag
    // append text to message div
    messageDiv.appendChild(messageP); // add <p> to <div>
    messageP.appendChild(document.createTextNode(message)); // insert text into <p>
    document.getElementById("history").appendChild(messageDiv); // add message <div> to <div class="chat-history" id="history">
}

function sendMessage(){
    messageOut(document.getElementById("textOut").value);
    document.getElementById("textOut").value=""
}

