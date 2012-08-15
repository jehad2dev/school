var targetSheetCompetanceSelected 	= new Array();
var targetCompetancesSelected 		= new Array();

$(document).ready(function() {
	$("#SheetCompetenceId option:selected").each(function () {
		targetSheetCompetanceSelected.push($(this).val());
	});
	$("#CompetenceCompetence option:selected").each(function () {
		targetCompetancesSelected.push( $(this).val() );
	});
	loadCompetences($("#SheetDisciplineId").val());	
	$("#SheetDisciplineId").change(function() {
		var disciplineId  = $(this).val();
		loadCompetences(disciplineId);
	});
 });

function loadCompetences(id) {
	$.get("/competences/byDiscipline", {id : id}, function (data) {
		var targetSheetCompetance = $("#SheetCompetenceId").get(0);
		var targetCompetances = $("#CompetenceCompetence").get(0);
		targetSheetCompetance.options.length = 0;
		targetCompetances.options.length = 0;
		var i = 0
		$.each(data, function(key, value) {
			if (-1 != jQuery.inArray(key, targetSheetCompetanceSelected)) {
				selected = true;
			} else {
				selected = false;
			}
			targetSheetCompetance.options[i] = new Option(value,key,false,selected);
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