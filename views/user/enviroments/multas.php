<div class="section-infractions">
    <div class="">
        <p class="infractions-text">MULTAS PENDIENTES</p>

    </div>
    <div class="">
        <div class="container1" id="dataBody">

        </div>
    </div>
   <?php 
   require_once 'models/userModel.php';
   $debts= new UserModel;
   var_dump($infractions->get('1'));
   
   
   ?>
</div>

<script>
        var data = [];
        var copydata = [];
        const sdate     = document.querySelector('#sdate');
        const scategory = document.querySelector('#scategory');


        sdate.addEventListener('change', e =>{
            const value = e.target.value;
            if(value === '' || value === null){
                this.copydata = [...this.data];
                checkForFilters(scategory);
                //renderData(this.copydata);
                return;
            }
            filterByDate(value);
        });

        scategory.addEventListener('change', e =>{
            const value = e.target.value;
            if(value === '' || value === null){
                this.copydata = [...this.data];
                checkForFilters(sdate);
                //renderData(this.copydata);
                return;
            }
            filterByCategory(value);
        });

        function checkForFilters(object){
            if(object.value != ''){
                //console.log('hay un filtro de ' + object.id);
                switch(object.id){
                    case 'sdate':
                        filterByDate(object.value);
                    break;  

                    case 'scategory':
                        filterByCategory(object.value);
                    break;
                    default:
                }
            }else{
                this.datacopy = [...this.data]; 
                renderData(this.datacopy);
            }
        }

        sorts.forEach(item =>{
            item.addEventListener('click', e =>{
                if(item.dataset.sort){  
                        sortBy(item.dataset.sort);        
                }
            });
        });

        function sortBy(name){
            this.copydata = [...this.data];
            let res;
            switch(name){
                case 'title':
                    res = this.copydata.sort(compareTitle);
                break;
             
                case 'date':
                    res = this.copydata.sort(compareDate);
                    break;
                        
                case 'amount':
                    res = this.copydata.sort(compareAmount);
                    break;

                    default:
                    res = this.copydata;
            }

            renderData(res);
        }

        function compareTitle(a, b){
            if(a.expense_title.toLowerCase() > b.expense_title.toLowerCase()) return 1;
            if(b.expense_title.toLowerCase() > a.expense_title.toLowerCase()) return -1;
            return 0;
        }
        function compareAmount(a, b){
            if(a.amount > b.amount) return 1;
            if(b.amount > a.amount) return -1;
            return 0;
        }
        function compareDate(a, b){
            if(a.date > b.date) return 1;
            if(b.date > a.date) return -1;
            return 0;
        }

        function filterByDate(value){
            this.copydata = [...this.data];
            const res = this.copydata.filter(item =>{
                return value == item.date.substr(0, 7);
            });
            this.copydata = [...res];
            renderData(res);
        }

  
        async function getData(){
            data = await fetch('http://localhost/uni-multas/infractions/getHistoryJSON')
            .then(res =>res.json())
            .then(json => json);
            this.copydata = [...this.data];
            console.table(data);
            renderData(data);
        }
        getData();

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function renderData(data){
            var databody = document.querySelector('#databody');
            let total = 0;
            databody.innerHTML = '';
            data.forEach(item => { 
                //total += item.amount;
                databody.innerHTML += `
                <div class="box">
                <h2>${item.date}</h2>
                <p class="info">${item.title}</p>
                <div data-module="view/vanillaJS" data-condition="touch">
                    <p>$${item.amount}</p>
                </div>
            </div>`;
            });
        }
        

        
    </script>