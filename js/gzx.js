function insertStr(soure, start, newStr){   

       return soure.slice(0, start) + newStr + soure.slice(start);
    }

function fwbstr(data){
	var index1 = 0;
    var reg1 = new RegExp('<span class="mathquill-embedded-latex" style="width.{1,}px;">[^$]',"g");
        while((index1=data.search(reg1))!=-1){
        	var a1 = data.match(reg1);
            var len1 = a1[0].length;
            console.log(index1);
            var newstr1 = "";
            newstr1 = insertStr(data, len1+index1-1, '$');
            data = newstr1;
        }
        var index2=0;
        var reg2 = new RegExp('<span class="mathquill-embedded-latex" style="width.{1,}px;">[$].{1,}[^<].{1,}[^$]</span>',"g");
        while ((index2 = data.search(reg2))!=-1) {
        	var a2 = data.match(reg2);
        	var len2 = a2[0].length;
        	var newstr2 = insertStr(data, index2+len2-7, '$');
        	data = newstr2;
        }
        return data;
}