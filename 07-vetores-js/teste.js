function ex01() {

  //var v1 = [2, 4, 6, 8];
  //console.log(v1);

  //var v2 = new Array(1, 3, 5, 7);
  //console.log(v2);

  // var v3 = [];
  // v3[0] = 1;
  // v3[1] = 2;
  // v3[2] = 3;
  // v3[3] = 4;
  // console.log(v3);

  var v4 = new Array();
  v4[0] = 9;
  v4[1] = 8;
  v4[2] = 7;
  v4[3] = 6;
  console.log(v4);

  console.log("Posição 1: " + v4[1]);

}


function ex02() {

  var v = [8, 6, 4, 2];
  console.log(v);
  console.log("v.length: " + v.length);

  v.push(10);
  console.log(v);

  v.sort();
  console.log(v);

  // Impressão na ordem reversa
  for (var i = v.length - 1; i >= 0; --i)
    console.log(v[i]);

}


function ex03() {

  var v = [2, 3, 4];
  console.log(v);

  // Acrescenta 5 ao final do vetor
  v.push(5);
  console.log(v);

  // Acrescenta 1 no inicio do vetor
  v.unshift(1);
  console.log(v);

  // Remove o elemento 1 do vetor
  v.shift();
  console.log(v);

  // Remove o último elemento do vetor
  v.pop()
  console.log(v);

}
