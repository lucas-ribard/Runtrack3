function getSampleText() {

    Promise.all([
    fetch('expression.txt').then(x => x.text()),
 
    ]).then(allResp => {
      let expression = allResp[0];
      var paragraph = document.createElement("p");
      var exp = document.createTextNode(expression);
      paragraph.appendChild(exp);
      document.body.appendChild(paragraph);
    })
  }
