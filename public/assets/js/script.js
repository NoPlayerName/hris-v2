$(function () {
    //addtugas
    $(".addtugas").on("click", function () {
        $("#ModalLabel").html("Add Tugas");
        $(".formModal").attr("action", "ski-new/tugas/post");
        $(".label2").html("Tugas");
        $(".input2").attr("name", "tugas");
        $(".form1").hide();
        $(".form3").hide();
        $(".form4").hide();
        $(".form5").hide();
        $(".form6").hide();
        $(".form7").hide();
        $(".form8").hide();
    });

    //addski
    $(".addski").on("click", function () {
        $("#ModalLabel").html("Add Sasaran Kerja Individu");
        $(".formModal").attr("action", "ski-sk/post");
        $(".form1").show();
        $(".form3").show();
        $(".form4").show();
        $(".form5").show();
        $(".form6").show();
        $(".form7").show();
        $(".form8").show();
        $(".label1").html("Grup");
        $(".label2").html("Sasaran Kerja");
        $(".label3").html("Bobot");
        $(".label4").html("Kriteria");
        $(".label5").html("Target");
        $(".label6").html("Batas Wktu (*)");
        $(".label7").html("Rencana Tindakan");
        $(".input1").attr("name", "grup");
        $(".input2").attr("name", "sasaran_kerja");
        $(".input3").attr("name", "bobot");
        $(".input4").attr("name", "kriteria");
        $(".input5").attr("name", "target");
        $(".input6").attr("name", "batas_waktu");
        $(".input7").attr("name", "rencana_tindakan");
    });
});
