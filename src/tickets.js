$(document).ready(function () {
    $(".nav-toggler").each(function (_, navToggler) {
        var target = $(navToggler).data("target");
        $(navToggler).on("click", function () {
            $("#house").toggleClass("mt-64");
            $(target).animate({
                height: "toggle"
            });
        });
    });
});

function tickets() {
    let adult = document.getElementById("adult").value
    let student = document.getElementById("student").value
    let child = document.getElementById("child").value
    let senior = document.getElementById("senior").value
    let baby = document.getElementById("baby").value
    let carer = document.getElementById("carer").value
    let adultEvent = document.getElementById("adultEvent").value
    let childEvent = document.getElementById("childEvent").value
    let total = document.getElementById("p9")
    cost = []

    if (adult >= 1) {
        document.getElementById("p1").innerHTML = ((24.95 * adult).toFixed(2));
    }
    if (student >= 1) {
        document.getElementById("p2").innerHTML = ((22.95 * student).toFixed(2));
    }
    if (child >= 1) {
        document.getElementById("p3").innerHTML = ((20.95 * child).toFixed(2));
    }
    if (senior >= 1) {
        document.getElementById("p4").innerHTML = ((23.95 * senior).toFixed(2));
    }
    if (baby >= 1) {
        document.getElementById("p5").innerHTML = "Free";
    }
    if (carer >= 1) {
        document.getElementById("p6").innerHTML = "Free";
    }
    if (adultEvent >= 1) {
        document.getElementById("p7").innerHTML = ((124.99 * adultEvent).toFixed(2));;
    }
    if (childEvent >= 1) {
        document.getElementById("p8").innerHTML = ((14.99 * childEvent).toFixed(2));
    }
    total.innerHTML = (23.95 * senior + 20.95 * child + 22.95 * student + 24.95 * adult + 0.00 * baby + 0.00 * carer + 124.99 * adultEvent + 124.99 * childEvent).toFixed(2)
}