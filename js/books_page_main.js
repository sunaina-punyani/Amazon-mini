
//json objects and arrays
var start=0;
var end=4;
var pageCounter = 1;
var books = document.getElementById("books");
var btn = document.getElementById("btn_books");
btn.addEventListener("click", function(){

var ourRequest = new XMLHttpRequest(); //this is used to download json and not xml data but name still persists
ourRequest.open('GET', '../json/books.json');
ourRequest.onload = function(){
 // console.log(ourRequest.responseText);
 //var ourData = ourRequest.responseText;
  if(ourRequest.status >=200 && ourRequest.status < 400){
  	var ourData = JSON.parse(ourRequest.responseText);
 //console.log(ourData[0]);
 renderHTML(ourData);
  }
  else{
  	console.log("We connected to the server but it returned an error");
  }
 

};
ourRequest.onerror = function(){
	console.log("Connection error");
}

ourRequest.send();
pageCounter++;


//AJAX is asynchronous javascript and XMl asynchronous means 
// doesnt require a page refresh
//in recent years json has replaced xml

//add an event listener

});

function renderHTML(data){
	var img = "";

    for(i=start;i<end; i++){
    	img+= "../images_books/" + data[i].book_id + ".jpg";
    	
    }
start+=4;
end+=4;
   books.insertAdjacentHTML('beforeend',img);

 

}