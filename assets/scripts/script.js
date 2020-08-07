$( document ).ready(function() {
    
$("#one").on("click", function () {
     alertify.alert("Hello World");
 });

 $("#two").on("click", function () {
     alertify.confirm("Are you sure you want to delete?", function (asc) {
         if (asc) {
             //ajax call for delete       
             alertify.success("Record is deleted.");

         } else {
             alertify.error("You've clicked cancel");
         }
     }, "Default Value");
 });
});