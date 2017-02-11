$(".quick-actions > li a > span").hide();
$(document).ready(function(){
	$(".quick-actions > li a > span").hide();

   $(".quick-actions > li").click(function(){
    	$(".quick-actions").find("span").hide();
        $(this).find("span").show();


        var phuong = $(this).find("a").first().contents().eq(3).text();
        $("#phuong").html(phuong);
        

         var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	var text_res = this.responseText;

        	var html_code_pos = text_res.search("numnum");
        	var res = text_res.slice(0, html_code_pos);
        	var num = text_res.slice(html_code_pos + 6, -1);
            document.getElementById("list_e_user").innerHTML = res;
            $(".quick-actions").find("span").text(num);

         }
        };
        xhttp.open("GET", "e_user.php?phuong=" + phuong, true);
        xhttp.send();

        });


$(".titi").hide();
    
});


   function load_user(url) {
   		
		  var xhttp;
		  xhttp=new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		     var res_s = xhttp.responseText;
		     var diachi_pos = res_s.search("diachi");
		     var chiso_pos   = res_s.search("chiso");
		     var tieuthu_pos = res_s.search("tieuthu");
		     var giatien_pos = res_s.search("giatien");
		     var chisohientai_pos = res_s.search("chisohientai");
		     for_chart = res_s.slice(tieuthu_pos + 7, giatien_pos);
		     document.getElementById("e_user").innerHTML = res_s.slice(0, diachi_pos);
		     document.getElementById("e_user_add").innerHTML =res_s.slice(diachi_pos + 6, chiso_pos);
		     document.getElementById("chi_so_cong_to").innerHTML =res_s.slice(chiso_pos + 5, tieuthu_pos);
		     document.getElementById("dien_nang_tieu_thu").innerHTML =res_s.slice(tieuthu_pos + 7, giatien_pos);
		     document.getElementById("thanh_tien").innerHTML =res_s.slice(giatien_pos + 7, chisohientai_pos);
		     document.getElementById("chi_so_hien_tai").innerHTML =res_s.slice(chisohientai_pos + 12, -1);
		    }
  var n = for_chart.replace(/\n/g, "");
  n = n.replace(/<td>/g, "");
  var m = n.replace(/<\/td>/g, ",");
  m = m.replace(/Điện\ năng\ tiêu\ thụ/g, "");
  var thang = m.split(",");

	var ctx = document.getElementById("myChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
    labels: ["T1", "T2", "T2", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"],
    datasets: [
        {
            label: "",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [thang[1],thang[2], thang[3], thang[4], thang[5], thang[6],thang[7],thang[8],thang[9],thang[10],thang[11],thang[12]],
            spanGaps: false,
        }
    ]
}
}
);	


		  };

		  xhttp.open("GET", url, true);
		  xhttp.send();
		}
	function sua_gia_dien(bac) {
		$(".titi").hide();
		$('#bx').attr('class', '');
		$('#bx_label').attr('class', '');
		$("body").find('#' + 'b' + bac).show();


	}
	

	