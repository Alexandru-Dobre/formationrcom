angular.module("rubedoBlocks").lazy.controller("JournalViewerController",["$scope","Journaux",function($scope,Journaux){
    var me=this;
    me.newJournalTitle="";
    var blockConfig=$scope.blockConfig;
    me.refreshJournaux=function(){
        Journaux.getList().then(
            function(response){
                me.journaux=response.data.journaux;
            }
        );
    };

    me.createNewJournal=function(){
        if(me.newJournalTitle!=""){
            Journaux.addJournal(me.newJournalTitle).then(
                function(response){
                    me.refreshJournaux();
                }
            );
            me.newJournalTitle="";
        }
    };
    me.refreshJournaux();
}]);