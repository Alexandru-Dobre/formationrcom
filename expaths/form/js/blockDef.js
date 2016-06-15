blocksConfig.carrouselVideo={
    "template": "/extension-path/form/templates/blocks/carrouselVideo.html",
    "externalDependencies":["/extension-path/form/src/modules/rubedoBlocks/controllers/CarrouselVideoController.js",'/components/OwlFonk/OwlCarousel/owl-carousel/owl.carousel.min.js'],
    "absoluteUrl": true
};
angular.module("rubedoDataAccess").factory('Journaux',['$http',function($http){
    var serviceInstance = {};
    serviceInstance.getList=function(){
        return ($http.get("/api/v1/journaux"));
    };
    serviceInstance.addJournal=function(titre){
        return ($http({
            url:"/api/v1/journaux",
            method:"POST",
            data:{
                titre:titre
            }
        }));
    };
    return serviceInstance;
}]);