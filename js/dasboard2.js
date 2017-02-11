$(".quick-actions > li a > span").hide();

$(document).ready(function(){
	$(".quick-actions > li a > span").hide();
  $("#modform").hide();

   $(".quick-actions > li").click(function(){
    	$(".quick-actions").find("span").hide();
        $(this).find("span").show();


        var phuong = $(this).find("a").first().contents().eq(3).text();
        $("#phuong").html(phuong);
        

         var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	var text_res = this.responseText;
        	//document.getElementById("list_e_user").innerHTML = text_res;

        	var html_code_pos = text_res.search("numnum");
        	var res = text_res.slice(0, html_code_pos);
        	var num = text_res.slice(html_code_pos + 6, -1);
            document.getElementById("list_e_user").innerHTML = res;
            $(".quick-actions").find("span").text(num);

         }
        };
        xhttp.open("GET", "e_user2.php?phuong=" + phuong, true);
       // xhttp.open("GET", "abc.txt", true);
        xhttp.send();

        });


$(".titi").hide();
    
});

function mod_user(id,ten,diachi,sdt){
  //var ten= "id";
    $("#modform").show();
    $("#addform").hide();
    $("#name").val(ten);
    $("#address").val(diachi);
    $("#phone").val(sdt);
    $("#id_user").val(id);
}
function del_user(id) {
  alert("hehe");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText=="ok") {location.href='http://localhost/chinh/admin2.php';}
         }
        };
  xhttp.open("GET", "admin2_submit.php?del_id=" + id, true);
  xhttp.send();
 // window.location.href = "http://localhost/chinh/admin2.php";
 
}
