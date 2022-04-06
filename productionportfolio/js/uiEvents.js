/*$(document).ready(function () {
  $("#homeBtn").click(function () {
    $("#content").load("home.php");
  });
  $("#aboutBtn").click(function () {
    $("#content").load("about.php");
  });
  $("#workBtn").click(function () {
    $("#content").load("myWork.php");
  });
  $("#contactBtn").click(function () {
    $("#content").load("contact.php");
  });
  $("#graphics").click(function () {
    $("#content").load("graphics.php");
  });
  $("#websites").click(function () {
    $("#content").load("websites.php");
  });
  $("#projects").click(function () {
    $("#content").load("projects.php");
  });

});*/
$("body").on("click", "#homeBtn", function () {
  $("#content").slideUp("fast", "linear", function () {
    $("#content").load("home.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });

});
$("body").on("click", "#aboutBtn", function () {
  $("#content").slideUp("fast", "linear", function () {
    $("#content").load("about.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });

});
$("body").on("click", "#workBtn", function () {
  $("#content").slideUp("fast", "linear", function () {
    $("#content").load("myWork.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });

});
$("body").on("click", "#contactBtn", function () {
  $("#content").slideUp("fast", "linear", function () {
    $("#content").load("contact.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });

});
$("body").on("click", "#graphics", function () {
  $("#content").slideUp("fast", "linear", function () {
    $("#content").load("graphics.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });

});
$("body").on("click", "#websites", function () {
  $("#content").slideUp("fast", "linear", function () {
    $("#content").load("websites.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });

});
$("body").on("click", "#projects", function () {
   $("#content").slideUp("fast", "linear", function () {
    $("#content").load("projects.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });
});
$("body").on("click", "#homeBtn1", function () {
	
  $(".linkCustom").removeClass('active activeLink');
  $("#homeBtn").addClass('active activeLink');
  $("#content").slideUp("fast", "linear", function () {
    $("#content").load("home.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });
});
$("body").on("click", "#aboutBtn1", function () {
  $(".linkCustom").removeClass('active activeLink');
  $("#aboutBtn").addClass('active activeLink');
   $("#content").slideUp("fast", "linear", function () {
    $("#content").load("about.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });
});
$("body").on("click", "#workBtn1", function () {
  $(".linkCustom").removeClass('active activeLink');
  $("#workBtn").addClass('active activeLink');
   $("#content").slideUp("fast", "linear", function () {
    $("#content").load("myWork.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });
});
$("body").on("click", "#contactBtn1", function () {
  $(".linkCustom").removeClass('active activeLink');
  $("#contactBtn").addClass('active activeLink');
   $("#content").slideUp("fast", "linear", function () {
    $("#content").load("contact.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });
});
$("body").on("click", "#privacy", function () {
  $(".linkCustom").removeClass('active activeLink');
    $("#content").slideUp("fast", "linear", function () {
    $("#content").load("privacy.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });
});
$("body").on("click", "#cookies", function () {
  $(".linkCustom").removeClass('active activeLink');
    $("#content").slideUp("fast", "linear", function () {
    $("#content").load("cookies.php", function () {
      $("#content").slideDown("fast", "linear");
    });

  });
});

