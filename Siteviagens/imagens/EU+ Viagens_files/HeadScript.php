 
    if(typeof(Global) == 'undefined')
        Global = {};
        
    Global.Hooks = Global.Hooks || {};
    Global.PathWebService = "https://travelgov2.travelagent.com.br/V2/TravelGo/Services/ServiceUI.svc/";
	Global.URLSite = "https://eumaisviagens.com.br/";
    Global.HomeURL = "https://eumaisviagens.com.br";
	Global.DomainName = "eumaisviagens.com.br";
	Global.ClientName = "";
	Global.InterfaceEnvelope = {};
	Global.CrossDomain= true;
    Global.CrossDomainByPost = true;
    Global.ImagesPath = "https://travelgov2.travelagent.com.br/V2/WebCommon/Images/";
    Global.filesRepositoryUrl = "https://www.travelagent.com.br/uploadImages/";
    Global.SearchMode = 1;
    Global.ConsiderBestPrice = false;
    Global.AffiliatedId = 0;
    Global.ConfirmUnload = false;
    Global.MilisecondsToDoGetSearchStatus = 2000;
    Global.WebCommonPath = "https://travelgov2.travelagent.com.br/V2/WebCommon/";
    Global.UseSymbolsFromThisCulture = 'pt-BR';    
    //Global.Mobile = (window.innerHeight > window.innerWidth);
    
    Global.Mobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
    Global.Tablet = Global.Mobile;
    Global.Desktop = !Global.Mobile;
    Global.FidelityEnabled = (typeof(Fidelity) != "undefined" && Fidelity.FidelityEnabled == 'true');

    if(typeof(isMobile) != "undefined" && isMobile)
    {
        Global.Mobile = isMobile.phone || isMobile.tablet;
        Global.Tablet = isMobile.tablet;
        Global.Desktop = !isMobile.any;
    }

    Global.AdditionalSearchParameters = [];
    Global.TGUser = (typeof(TG) != "undefined") ? TG.User : null;