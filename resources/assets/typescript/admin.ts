interface JQuery {
    datepicker():void;
}


const url = window.location.pathname;




class Admin{


    constructor(){

        const  skills:string = "admin/skills";
        const   home:string = "admin/portfolio";
        const   about:string = "admin/about";

        if(this.isPage(home)){
            this.portfolio();
        }else if (this.isPage(skills)){

            this.skills();
            console.log("skills bills")

        }else if(this.isPage(about)){
            console.log("about page")
        }else{
            console.log("somewhere else")
        }
    }//constructor

    private isPage( search :string){
        return (url.search(search) >= 0)? true: false;
    }


    private portfolio(){
        (<any> $('[data-toggle="datepicker"]')).datepicker();
        function increment(value: string):number{
             return 1+Number(value);
        }

        function setTotal(id:string, name:string, value:any){
            $(`${id} input[name='${name}']`).val(value)
        }

        function getNumber(id:string):any{
            let value = $(id).find("input").last().attr("data-number") ||0;
            return value;
        }

        function addField(container:string, name:string, data:any){
            let field = `
             <p>
                <input class="form-control" type="text" data-number="${data}" name="${name}-${data}" value="">
             </p>
            `
            $(container).append(field);
        }
        let
        total:number,
        frameTotal = setTotal,
        libTotal = setTotal,
        langTotal = setTotal,
        medTotal = setTotal,
        smallTotal = setTotal,
        btn = (value:string) => {return $(value);},
        field

        ;


        function updateTotals(){
            frameTotal("#pills-framework","framework_total",getNumber("#pills-framework"));
            libTotal("#pills-library","library_total" ,getNumber("#pills-library"));
            langTotal("#pills-language","language_total" ,getNumber("#pills-language"));
            medTotal("#medium","medium_total" ,getNumber("#medium"));
            smallTotal("#small","small_total" ,getNumber("#small"));


        }

        updateTotals();

        btn("#framework-btn").on("click", function(){
            let num = getNumber("#pills-framework");
            let newNum = increment(num);
            addField("#framework-container","framework" ,newNum);
            frameTotal("#pills-framework","framework_total",newNum);
        });

        btn("#library-btn").on("click", function(){

            let
             id = "#pills-library",
             cont = "#library-container",
             name = "library_total",
             field = "library" ,
             num = getNumber(id),
             newNum = increment(num);
            addField(cont,field ,newNum);
            setTotal(id,name,newNum);
        });

        btn("#language-btn").on("click", function(){

            let
             id = "#pills-language",
             cont = "#language-container",
             name = "language_total",
             field = "language" ,
             num = getNumber(id),
             newNum = increment(num);
            addField(cont,field, newNum);
            setTotal(id,name,newNum);
        });

        btn("#medium-btn").on("click", function(){

            let
             id = "#medium",
             cont = "#medium-container",
             name = "medium_total",
             field = "medium",
             num = getNumber(id),
             newNum = increment(num);
            addField(cont,field, newNum);
            setTotal(id,name,newNum);
        });

        btn("#small-btn").on("click", function(){

            let
             id = "#small",
             cont = "#small-container",
             name = "small_total",
             field = "small",
             num = getNumber(id),
             newNum = increment(num);
            addField(cont,field, newNum);
            setTotal(id,name,newNum);
        });
    }

    private skills(){

        let rowBtn = $('#add-row');
         function changeNumberRow(){
         let rowNumber =$('tr').last().attr("data-number");
         $('input[name="row"]').val(rowNumber);

        }

        function updateDOM(){
            (<any>$('[data-toggle="datepicker"]') ).datepicker({
                format: "yyyy-mm-dd"
            });
            changeNumberRow();
        }

        function createRow(){
            let result = $('tr').last().attr("data-number");
            let body = $('tbody');
            let next = 1+Number(result);
            let row = `<tr data-number="${next}">
                <td><input class="form-control" type="text" name="name-${next}" value="">  </td>
                <td>
                    <select class="form-control" name="current-${next}">
                        <option value="0">False</option>
                        <option value="1">True</option>
                    </select>
                </td>
                <td>
                    <select class="form-control" name="rank-${next}">
                        <option value="4">Familiar</option>
                        <option value="3">Competent</option>
                        <option value="2">Proficient</option>
                        <option value="1">Master</option>
                    </select>
                 </td>
                <td>
                    <select class="form-control" name="position-${next}">

                        <option value="1">Front</option>
                        <option value="2">Back</option>
                        <option value="3">Other</option>
                    </select>
                </td>
                <td><input data-toggle="datepicker"  class="form-control" type="text" name="year-${next}" value="">  </td>
            </tr>`;
            body.append(row);
            updateDOM();
        }



        rowBtn.on('click', createRow);
        updateDOM();
    }//skills
}

const  dashboard = new Admin();
