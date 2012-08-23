var targetCompetancesSelected 		= new Array();

$(document).ready(function() {
	$("#CompetenceParentId option:selected").each(function () {
		targetCompetancesSelected.push( $(this).val() );
	});
	loadCompetences($("#CompetenceDisciplineId").val());	
	$("#CompetenceDisciplineId").change(function() {
		var disciplineId  = $(this).val();
		loadCompetences(disciplineId);
	});
});

function loadCompetences(id) {
	$.get("/competences/byDiscipline", {id : id}, function (data) {
		var targetCompetances = $("#CompetenceParentId").get(0);
		targetCompetances.options.length = 0;
		var i = 0
		$.each(data, function(key, value) {
			if ( -1 != jQuery.inArray(key, targetCompetancesSelected)) {
				selected = true;
			} else {
				selected = false;
			}
			targetCompetances.options[i] = new Option(value,key,false,selected);
			i++;
		});
	}, 'json');
}
