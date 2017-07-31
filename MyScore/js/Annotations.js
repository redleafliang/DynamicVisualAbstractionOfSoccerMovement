//注释的意思,但是不知道是注释什么,可能是testSequences
Annotations = function(data,dy,height){
    this.data = data;
    this.h = height;
    this.init(dy);
};

Annotations.prototype.init = function(dy){
    var div = d3.select("#testSequences")
        .append("div")
        .attr("class","annotations")
        .style("position","absolute")
        .style("margin-top",dy+"px");

    div.html("ANNOTATIONS");
};