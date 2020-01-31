$(document).ready(function() {
  $(".next-address").click(function() {
    $(".needed-info-form-address").slideUp();
    $(".needed-info-form-more-info").slideDown();
    $(".warning-authorization").slideUp();
    $(".back-address").slideDown();
    $(".more-info").css("background-color", "#243c58");
    $(".more-info").css("color", "#ffffff");
    $(".next-address").hide();
    $(".next-info").show();
  });
});
$(document).ready(function() {
  $(".back-address").click(function() {
    $(".needed-info-form-address").slideDown();
    $(".needed-info-form-more-info").slideUp();
    $(".warning-authorization").slideDown();
    $(".go-back").slideUp();
    $(".more-info").css("background-color", "#ffffff");
    $(".more-info").css("color", "#243c58");
    $(".next-address").show();
    $(".next-info").hide();
  });
});
$(document).ready(function() {
  $(".next-info").click(function() {
    $(".needed-info-form-more-info").slideUp();
    $(".needed-info-form-private-info").slideDown();
    $(".back-info").show();
    $(".back-address").hide();
    $(".next-private-info").show();
    $(".next-info").hide();
    $(".private-info").css("background-color", "#243c58");
    $(".private-info").css("color", "#ffffff");
  });
});
$(document).ready(function() {
  $(".back-info").click(function() {
    $(".needed-info-form-more-info").slideDown();
    $(".needed-info-form-private-info").slideUp();
    $(".back-info").hide();
    $(".back-address").show();
    $(".next-private-info").hide();
    $(".next-info").show();
    $(".private-info").css("background-color", "#ffffff");
    $(".private-info").css("color", "#243c58");
  });
});

$(document).ready(function() {
  $(".next-private-info").click(function() {
    $(".needed-info-form-activating").slideDown();
    $(".needed-info-form-private-info").slideUp();
    $(".back-address").hide();
    $(".next-private-info").hide();
    $(".back-info").hide();
    $(".back-private-info").show();
    $(".activating").css("background-color", "#243c58");
    $(".activating").css("color", "#ffffff");
  });
});

$(document).ready(function() {
  $(".back-private-info").click(function() {
    $(".back-private-info").hide();
    $(".needed-info-form-activating").slideUp();
    $(".needed-info-form-private-info").slideDown();
    $(".back-address").hide();
    $(".next-private-info").show();
    $(".back-info").show();
    $(".activating").css("background-color", "#ffffff");
    $(".activating").css("color", "#243c58");
  });
});

$(document).ready(function() {
  $(".code-validation").click(function() {
    $(".needed-info-form-activating").hide();
    $(".back-private-info").hide();
    $(".needed-info").hide();
    $(".registration-form").hide();
    $("#success-registration").show();
  });
});
