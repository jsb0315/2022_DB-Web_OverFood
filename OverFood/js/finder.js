console.log("JS 실행");

function printsql(sql){
    console.log(sql);
}

function requestMenu(f1, f2) {  //f1: 선택유무, f2:수치
    const input_submit = document.querySelector('#section_search #input_submit');
    // submit 비활성화
    input_submit.style.backgroundColor = '#666666';
    input_submit.value = '메뉴 탐색 중...'
    input_submit.setAttribute('disabled', true);
    setTimeout(() => {
        
        // submit 재활성화
        input_submit.removeAttribute('disabled');
        input_submit.style.backgroundColor = '#0d6efd';
        input_submit.value = "메뉴 추천 버튼"
    }, 300);    

    var select;
    // for(var i=2;i<4;i++){   //조건 쿼리
    //     select=document.querySelector('.radio.type_0'+i+' input:checked');
    //     select.value=(document.querySelector('label[for*="'+select.id+'"]').textContent)
    //     con1.push(select.value)
    // }

    for(var i=0;i<4;i++){   //수치 4개 5~8
        select=document.querySelector('.radio.type_0'+(i+5)+' input:checked');
        if (f1[i]!="X."){
            select.value=f2[i];
        }
        console.log(f1[i], f2[i], select.value);
    }

    
}

function keepbtn(arr, f1, f2){
    console.log(arr, f1, f2);
    for (var i=0;i<3;i++) {
        document.querySelector('#input_type_0'+(i+2)+'_'+arr[i]).checked=true;
        document.querySelector('#myRange'+i).value=f2[i];
        if (f1[i]!="X.")
            document.querySelector('#input_type_0'+(i+5)+'_one').checked=true;
    }
    var i=3;
    if (f1[i]!="X."){
        document.querySelector('#input_type_0'+(i+5)+'_one').checked=true;
        document.querySelector('#myRange'+i).value=f2[i];
    }
}