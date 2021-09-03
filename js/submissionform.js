$(document).ready(function () {

	$("#step1proceed").click(function () {
		if ($('input[name=services][value=es]:checked').length == 1) {
			$(window).scrollTop(0);
			$("#step1").hide();
			$("#step2").show();
			$(".step-block ul li:nth-child(2)").addClass("active");
			$(".step-block ul li:nth-child(1)").removeClass("active");
			$(".step-block ul li:nth-child(3)").removeClass("active");
		} else if ($('input[name=services][value=ts]:checked').length == 1) {
			$(window).scrollTop(0);
			$("#step1").hide();
			$("#step3").show();
			$(".step-block ul li:nth-child(3)").addClass("active");
			$(".step-block ul li:nth-child(1)").removeClass("active");
			$(".step-block ul li:nth-child(2)").removeClass("active");
		} else {
			alert("please select a service");
		}
	});
	$("#step2proceed").click(function () {
		if ($('input[name=editingservices]:checked').length == 1) {
			$(window).scrollTop(0);
			$("#step2").hide();
			$("#step3").show();
			$(".step-block ul li:nth-child(3)").addClass("active");
			$(".step-block ul li:nth-child(1)").removeClass("active");
			$(".step-block ul li:nth-child(2)").removeClass("active");
		} else {
			alert("please select an editing service");
		}
	});
	$("#step2goback").click(function () {
		$(window).scrollTop(0);
		$("#step2").hide();
		$("#step1").show();
		$(".step-block ul li:nth-child(1)").addClass("active");
		$(".step-block ul li:nth-child(2)").removeClass("active");
		$(".step-block ul li:nth-child(3)").removeClass("active");
	});
	$("#step3proceed").click(function () {
		if ((document.getElementById("file").value == "") && (document.getElementById('no-doc').checked === false)) {
			alert("Please upload a file or select the checkbox");
			return false;
		}
		else if ((document.getElementById("file").value != "") && (document.getElementById('no-doc').checked === true)) {
			alert("Please do either upload a file or select the checkbox");
			return false;
		}
		$("#step3").hide();
		$("#final-step").show();
		$(".step-block ul li:nth-child(4)").addClass("active");
		$(".step-block ul li:nth-child(3)").removeClass("active");

	});
	$("#step3goback").click(function () {
		if ($('input[name=services][value=es]:checked').length == 1) {
			$("#step3").hide();
			$("#step2").show();
			$(".step-block ul li:nth-child(2)").addClass("active");
			$(".step-block ul li:nth-child(1)").removeClass("active");
			$(".step-block ul li:nth-child(3)").removeClass("active");
		} else if ($('input[name=services][value=ts]:checked').length == 1) {
			$("#step3").hide();
			$("#step1").show();
			$(".step-block ul li:nth-child(1)").addClass("active");
			$(".step-block ul li:nth-child(2)").removeClass("active");
			$(".step-block ul li:nth-child(3)").removeClass("active");
		}
	});
	$("#finalstepgoback").click(function () {
		$(window).scrollTop(0);
		$("#final-step").hide();
		$("#step3").show();
		$(".step-block ul li:nth-child(3)").addClass("active");
		$(".step-block ul li:nth-child(4)").removeClass("active");
	});
	$("input[name='formatoption']").change(function () {
		if ($('input[name=formatoption][value=yes]:checked').length == 1) {
			$("#formatingreqd").show();
		} else if ($('input[name=formatoption][value=no]:checked').length == 1) {
			$("#formatingreqd").hide();
		}
	});




});