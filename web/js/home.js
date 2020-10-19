var addEventListeners = () => {
    if(document.getElementById("search_organization"))
    {
        document.getElementById("search_organization").onclick = () => {
            var organization = document.getElementById("organization_selected").value
           searchAndDisplayOrganizationDetails(organization);
        }
    }
}


var searchAndDisplayOrganizationDetails = organization => {
    client id 
    Has An Account
    organization
    First Name
    Last Name
    Phone Number
    Email Address 
    Notes
    <button>

}
