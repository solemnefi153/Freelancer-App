var addMainButtonsEventListeners = () => {
    var search_organization_btn = document.getElementById("search_organization_btn")
    var create_client_btn = document.getElementById("create_client_btn")
    var view_services_btn = document.getElementById("view_services_btn")
    var create_services_btn = document.getElementById("view_services_btn")

    search_organization_btn.onclick = () => {
        var organization = document.getElementById("organization_selected").value
        searchAndDisplayOrganizationDetails(organization);
    }
}
addMainButtonsEventListeners();

var searchAndDisplayOrganizationDetails = organization => {
    var content_section = document.getElementById("content_section")
    if(organization != "none"){
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               var content_section = document.getElementById("content_section");
               content_section.innerHTML = this.responseText;
            }
        }
        var query = "organization=" + organization;
        xhttp.open("GET", "../php/load_client_details.php?" + query, true);
        xhttp.send();
    }
}


