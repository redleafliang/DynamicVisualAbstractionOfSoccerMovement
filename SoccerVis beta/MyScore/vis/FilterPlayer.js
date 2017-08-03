var ConstAllSequences = [];

function StoreSequence(AllSequences) {
    ConstAllSequences = AllSequences;
    //console.log(ConstAllSequences);
    //SelectPlayer(10);
}

function SelectPlayerByNumber(PlayerNumber) {
    var PlayerSequence = [];
    var SequenceLength = ConstAllSequences.length;
    var PlayerPid;
    //console.log(SequenceLength);
    for (var i=0;i<SequenceLength;i++){

        var PlayersNum = ConstAllSequences[i].data.players.length;
        for (var j=0;j<PlayersNum;j++){
            if(PlayerNumber == ConstAllSequences[i].data.players[j].jersey){
                PlayerPid = ConstAllSequences[i].data.players[j].pid;
                break;
            }

        }

        var NodesNum = ConstAllSequences[i].nodes.length;
        for (var j=0;j<NodesNum;j++){
            if(ConstAllSequences[i].nodes[j].pid == PlayerPid){
                PlayerSequence.push(i);
            }

        }

    }

    DrawSearchResultInLiveCover(PlayerPid);
    //console.log(ArrayUnique(PlayerSequence));
    DrawSearchResultInTimeLine(ArrayUnique(PlayerSequence));

}

function SelectPlayerByName(PlayName) {
    var PlayerSequence = [];
    var SequenceLength = ConstAllSequences.length;
    var PlayerPid;
    //console.log(SequenceLength);
    for (var i=0;i<SequenceLength;i++){

        var PlayersNum = ConstAllSequences[i].data.players.length;
        for (var j=0;j<PlayersNum;j++){
            if(PlayName == ConstAllSequences[i].data.players[j].last_name){
                PlayerPid = ConstAllSequences[i].data.players[j].pid;
                break;
            }

        }

        var NodesNum = ConstAllSequences[i].nodes.length;
        for (var j=0;j<NodesNum;j++){
            if(ConstAllSequences[i].nodes[j].pid == PlayerPid){
                PlayerSequence.push(i);
            }

        }

    }

    DrawSearchResultInLiveCover(PlayerPid);
    //console.log(ArrayUnique(PlayerSequence));
    DrawSearchResultInTimeLine(ArrayUnique(PlayerSequence));
}


function DrawSearchResultInTimeLine(PlayerSequence) {
    //console.log(PlayerSequence);


    var seqs = d3.select("#svg1").select(".sequencesVis").selectAll(".sequenceVisSequence");
    // var seqs = $this.visSVG.selectAll(".sequenceVisSequence");
    //console.log(seqs);
    var selectedRect = seqs.select("rect")
        .style("stroke-width", 3)
        .style("stroke", function(d,i){
            return getColorFromLastEvent(haveValue(PlayerSequence, i));
        });




    var last_events = d3.select("#svg1").selectAll(".lastEvent");

    //就是这里

    last_events
        .append("circle")
        .attr("r", 4)
        .style("fill", function(d,i){
            return getColorFromLastEvent(haveValue(PlayerSequence, i));
        });









}

function DrawSearchResultInLiveCover(PlayerSid) {
    //console.log(PlayerSid);
    IndirectlyClickPlayer(PlayerSid);
}



function getColorFromLastEvent(ColorResult){
    switch(ColorResult){
        case true:
            return "red";
            break;
        case false:
            return "white";
            break;
        default: throw ColorResult+" is not a shot event";
    }
}


function getOpacityFromLastEvent(OpacityResult){
    switch(OpacityResult){
        case true:
            return 0.2;
            break;
        case false:
            return 0;
            break;
        default: throw OpacityResult+" is not a shot event";
    }
}


function ArrayUnique(OriginalArray){
    var res = [];
    var json = {};
    for(var i = 0; i < OriginalArray.length; i++){
        if(!json[OriginalArray[i]]){
            res.push(OriginalArray[i]);
            json[OriginalArray[i]] = 1;
        }
    }
    return res;
}

function haveValue( OriginalArray, element ) {
    for (i in OriginalArray) {
        if (OriginalArray[i] == element) return true;
    }
    return false;
}

function HoverInfo(CurrentSid) {
    //console.log("HoverInfo");
    // console.log(CurrentSid);
    //console.log(ConstAllSequences);

    var PlayersInfo = [];
    PlayersInfo = ConstAllSequences[0].data.players;
    var FoundPlayersPid = [];

    var SequenceEndTime;
    var SequenceEndTimePeriod;
    var SequenceTotalDistance;
    var PlayerPositions = [];
    var Goalkeeper = 0;
    var Defender = 0;
    var Midfielder = 0;
    var Striker = 0;
    var HoverResult = [];

    var SequenceLength = ConstAllSequences.length;
    for (var i=0;i<SequenceLength;i++){
        if(CurrentSid == ConstAllSequences[i].sid){

            if(ConstAllSequences[i].endTime.period == 1){
                SequenceEndTimePeriod  = "First half";
            }
            else {
                SequenceEndTimePeriod  = "Second half";
            }
            SequenceEndTime = "End time:" + SequenceEndTimePeriod + " " + ConstAllSequences[i].endTime.min + ":" + ConstAllSequences[i].endTime.sec;
            SequenceTotalDistance = "Total distance :" + parseInt(ConstAllSequences[i].totalDistance);


            var NodesNum = ConstAllSequences[i].nodes.length;
            for (var j=0;j<NodesNum;j++){
                for(var k=0;k<PlayersInfo.length;k++) {
                    if (ConstAllSequences[i].nodes[j].pid == PlayersInfo[k].pid) {

                        if(ArrayContains(FoundPlayersPid,ConstAllSequences[i].nodes[j].pid)){

                        }
                        else {
                            FoundPlayersPid.push(PlayersInfo[k].pid);
                            switch (PlayersInfo[k].position) {
                                case "Goalkeeper":
                                    Goalkeeper += 1;
                                    break;
                                case "Defender":
                                    Defender += 1;
                                    break;
                                case "Midfielder":
                                    Midfielder += 1;
                                    break;
                                case "Striker":
                                    Striker += 1;
                                    break;
                            }
                        }
                    }
                }
            }
            PlayerPositions = [Striker, Midfielder, Defender, Goalkeeper];
            break;
        }

    }
    HoverResult = [SequenceEndTime, SequenceTotalDistance, PlayerPositions];
    return HoverResult;

}

function ArrayContains(OriginalArray, element ) {
    for (var i in OriginalArray) {
        if (OriginalArray[i] == element) return true;
    }
    return false;
}