/*Tab ѡ� ��ǩ*/
$(function(){
	    var $div_li =$("ul.scrollUl li");
	    $div_li.click(function(){
			$(this).addClass("selected")            //��ǰ<li>Ԫ�ظ���
				   .siblings().removeClass("selected");  //ȥ������ͬ��<li>Ԫ�صĸ���
            var index =  $div_li.index(this);  // ��ȡ��ǰ�����<li>Ԫ�� �� ȫ��liԪ���е�������
			$("div.cont > div")   	//ѡȡ�ӽڵ㡣��ѡȡ�ӽڵ�Ļ������������������滹��div 
					.eq(index).show()   //��ʾ <li>Ԫ�ض�Ӧ��<div>Ԫ��
					.siblings().hide(); //������������ͬ����<div>Ԫ��
		});
});





