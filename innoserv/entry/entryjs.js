var s1 = ["Information Management", "Finance", "Economics"];
var s2 = ["Electrical Engineering", "Information Engineering"];
var s3 = ["English", "German", "French", "Spanish"]
var s4 = ["G1", "G2", "G3"]
var x = [s1, s2, s3, s4];

function collegechange(s) {
  var department = document.getElementById("department");
  if (s.value > 0) {
    
    var v = "";
    for (var i = 0; i < x[s.value - 1].length; i++) {
      v += "<option value='" + x[s.value - 1][i] + "'>" + x[s.value - 1][i] + "</option>"
    }
    department.innerHTML = v;
  } else {
    department.innerHTML = "<option>" + "Select College First" + "</option>";
    }
}

