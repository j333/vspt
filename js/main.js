jQuery(function($) {
		$('.brands').responsiveEqualHeightGrid();
		$('.description h4').responsiveEqualHeightGrid();
		$('.description').responsiveEqualHeightGrid();
		$('.recursos').responsiveEqualHeightGrid();
});

$('.aclaracion').tooltip({'placement':'bottom'});

$(document).ready(function() {
  $('table.usuarios').filterTable();
});