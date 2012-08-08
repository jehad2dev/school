$(document).ready(function() {
	loadCompetences($("#SheetDisciplineId").val());	
	$("#SheetDisciplineId").change(function() {
		var disciplineId  = $(this).val();
		loadCompetences(disciplineId);
	});
 });

function loadCompetences(id) {
	$.get("/competences/byDiscipline", {id : id}, function (data) {
		var target1 = $("#SheetCompetanceId").get(0);
		var target2 = $("#CompetenceCompetence").get(0);
		target1.options.length = 0;
		target2.options.length = 0;
		var i = 0
		$.each(data, function(key, value) {
			target1.options[i] = new Option(value,key,false,false);
			target2.options[i] = new Option(value,key,false,false);
			i++;
		});
	}, 'json');
}