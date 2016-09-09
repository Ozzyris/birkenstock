var toogle_detail_information = true;
function launch_detail_information(){
	if(toogle_detail_information){
		$('a.quick_contact_button img:nth-child(1)').hide(0);
		$('a.quick_contact_button img:nth-child(2)').show(0);
		$('div.quick_contact div.content').show(0);
		toogle_detail_information = false;
	}else{
		$('a.quick_contact_button img:nth-child(1)').show(0);
		$('a.quick_contact_button img:nth-child(2)').hide(0);
		$('div.quick_contact div.content').hide(0);
		toogle_detail_information = true;
	}
}