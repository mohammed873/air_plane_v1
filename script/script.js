// up bottun
window.addEventListener("scroll",out);
 function out(){
var clickout = document.getElementById('up');
 if(window.pageYOffset>800){
     clickout.style.display="block";
 }
else{
    clickout.style.display="none";
}
 }
$(document).ready(function() {
    //to check if the number is greater than 0
  
    $('#reserve').click(function(){
        if($('#adults').val()<=0 && $('#children').val()<=0){ 
            $('.error').html('please the number of children and adults must be greater than 0');
        }
    });

    // to disaple the returning input if one way choice is checked
    $('#one_way').click(function(){
        $('#returning').attr('readonly', 'readonly');
        $('#returning').css('visibility','hidden');
    });
    $('#round_trip').click(function(){
        $('#returning').removeAttr('readonly');
        $('#returning').css('visibility','visible');
    });
 // setting the total price 
 $('#reserve').click(function(){
     //setting the price of travel_class
     console.log("hhh wash");
     var class_price;
     if($('#travel_class').val()==='First Class'){
        class_price = 500 ;
     }
    else if($('#travel_class').val()==='Bussness Class'){
        class_price = 400 ;
    }
    else if($('#travel_class').val()==='Econemy Class'){
        class_price = 300 ;
    }
    else{
        class_price = 0 ;
    }
     //setting the price of each Adult
     var adults_price=0;
     var adult = $('#adults').val();
     const adult_price = 100;
     adults_price = adult * adult_price; 
      //setting the price of each child
      var children_price=0;
      var child = $('#children').val();
      const child_price = 50;
      children_price = child * child_price; 
    //total price
    var total_price=0;
    total_price = class_price + adults_price + children_price ;
    console.log("total_price" + total_price);
    //round or one way trip
    var final_price=0;
    if(document.getElementById('round_trip').checked){
        final_price= total_price * 2 + ' DH';
       $('#price').val(final_price);
        console.log("final_price" + final_price);
    }
    else if(document.getElementById('one_way').checked){
        final_price=total_price + ' DH' ;
        $('#price').val(final_price);
     }
     else{
        final_price= 0 + ' DH' ;
     }
});
});

/******************************** validation for the footer inputs ******************************/
$('#btn-feedback').click(function(){
    if($('#feedback-sender').val()==='' || $('#feedback-area').val()==='' ){
        $('#feedback-error').html('please fill all the inputs');
    }
    else{
        $('#feedback-error').html('feedback is sent successfult');
        $('#feedback-sender').val('');
        $('#feedback-area').val('');
       
    }
    });

/******************************** admin part ******************************/

//showing & hiding the admin option
$(document).ready(function() {
$('.admin-option').click(function(){
    $('#admin-links').slideToggle(1500);
});
});

