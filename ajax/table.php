<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-4 p-5 shadow rounded-3">
        <!-- Button trigger modal -->
        <button type="button" id="add" class="btn btn-outline-dark float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +Add Employee
        </button>

        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tbody">
            <?php 
                require 'conn.php';
                global $conn;
                $select="SELECT * FROM  tbl_employee";
                $ex=$conn->query($select);
                while($row=mysqli_fetch_assoc($ex)){
                    echo '
                        <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['employee'].'</td>
                            <td>'.$row['position'].'</td>
                            <td>'.$row['salary'].'</td>
                            <td>
                                <img src="'.$row['profile'].'"
                                    width="30px" height="30px" class="rounded-circle" alt="">
                            </td>
                            <td>
                                <button id="delete" class="btn btn-outline-danger">Delete</button>
                                <button id="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-warning">Edit</button>
                            </td>
                        </tr>
                    ';
                }
             ?>
            </tbody>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form" action="" method="post" enctype="multipart/form-data">
                                <input type="text" name="id" id="id">
                                <div class="mb-2">
                                    <label for="" class="form-label">Employee</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Employee...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Position</label>
                                    <select name="position" class="form-select" id="position">
                                        <option value="" selected disabled>---other---</option>
                                        <option value="web_frontend">Web Frontend</option>
                                        <option value="web_backend">Web Backend</option>
                                        <option value="devops">Devops</option>
                                        <option value="ai_engineer">Ai Engineer</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Salary</label>
                                    <input type="number" id="salary" step="0.01" name="salary" class="form-control" placeholder="Salary...">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Profile</label>
                                    <input id="file" id="file" type="file" name="file" class="form-control"> <br>
                                    <img id="image" src="https://scontent.fpnh5-4.fna.fbcdn.net/v/t1.15752-9/722029618_1735675244269838_240952705794531881_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=101&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeFkL8JRpa4YRLSnv-7x0BZsmZ7Hgb117-GZnseBvXXv4akH4nZGJFzqjr2DEUe2ENfkSgGPNKajRqzz1XlgwMwq&_nc_ohc=LKm4gI_YxqkQ7kNvwFGGp8O&_nc_oc=AdrDfWXFKTc-Q2Mz2jnJT2MJboi2ZakU02bE7T1m03Fx1ystinF-JWJqTSNckw8fE9E&_nc_ad=z-m&_nc_cid=1595&_nc_zt=23&_nc_ht=scontent.fpnh5-4.fna&_nc_ss=7a22e&oh=03_Q7cD5gGmS_-pU4GGvVrmm_n5cc-mrgnmJ_JZCvSYHyDmITU1Ug&oe=6A57494C" class="rounded-circle" width="100px" height="100px" alt="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" id="save" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                    <button type="button" id="update" class="btn btn-warning" data-bs-dismiss="modal">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>

</html>
<script>
    $(document).ready(function(){
        $('#file').hide()
        $('#image').click(function(){
            $('#file').click()
        })
        $('#file').change(function(){
            const file=this.files[0]
            if(file){
                const image=URL.createObjectURL(file)
                $('#image').attr('src',image)
            }
        })
        $('#save').click(function(){
            const name=$('#name').val()
            const position=$('#position').val()
            const salary=$('#salary').val()
            const file=$('#file')[0].files[0]
            const image=URL.createObjectURL(file)
            console.log(image);
            
            
            let formData=new FormData()
            formData.append('name',name);
            formData.append('position',position);
            formData.append('salary',salary);
            formData.append('file',file);

            $.ajax({
                url:'insert.php',
                method:'POST',
                data:formData,
                contentType:false,
                processData:false,
                success:function(id){
                    $('#tbody').append(`
                        <tr>
                            <td>${id}</td>
                            <td>${name}</td>
                            <td>${position}</td>
                            <td>${salary}</td>
                            <td>
                                <img src="${image}"
                                    width="30px" height="30px" class="rounded-circle" alt="">
                            </td>
                            <td>
                                <button class="btn btn-outline-danger">Delete</button>
                                <button class="btn btn-outline-warning">Edit</button>
                            </td>
                        </tr>
                    `);
                    $('#form').trigger('reset')
                    $('#image').attr('src','https://scontent.fpnh5-4.fna.fbcdn.net/v/t1.15752-9/722029618_1735675244269838_240952705794531881_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=101&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeFkL8JRpa4YRLSnv-7x0BZsmZ7Hgb117-GZnseBvXXv4akH4nZGJFzqjr2DEUe2ENfkSgGPNKajRqzz1XlgwMwq&_nc_ohc=LKm4gI_YxqkQ7kNvwFGGp8O&_nc_oc=AdrDfWXFKTc-Q2Mz2jnJT2MJboi2ZakU02bE7T1m03Fx1ystinF-JWJqTSNckw8fE9E&_nc_ad=z-m&_nc_cid=1595&_nc_zt=23&_nc_ht=scontent.fpnh5-4.fna&_nc_ss=7a22e&oh=03_Q7cD5gGmS_-pU4GGvVrmm_n5cc-mrgnmJ_JZCvSYHyDmITU1Ug&oe=6A57494C')
                }
            })
            
        })
        $(document).on('click','#delete',function(){
            if(!confirm("Are you sure")) return
            const row=$(this).closest('tr')
            const id=row.find('td:eq(0)').text().trim()
            $.ajax({
                url:'delete.php',
                method:'POST',
                data:{
                    id
                },
                success:function(txt){
                    if(txt=='success'){
                        row.remove();
                    }
                }
            })
            
        })
        $('#add').click(function(){
            $('#exampleModalLabel').text("Add Employee")
            $('#save').show()
            $('#update').hide()
            // $('#form')[0].reset()
            $('#form').trigger('reset')
            $('#image').attr('src','https://scontent.fpnh5-4.fna.fbcdn.net/v/t1.15752-9/722029618_1735675244269838_240952705794531881_n.jpg?stp=dst-jpg_s640x640_tt6&_nc_cat=101&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeFkL8JRpa4YRLSnv-7x0BZsmZ7Hgb117-GZnseBvXXv4akH4nZGJFzqjr2DEUe2ENfkSgGPNKajRqzz1XlgwMwq&_nc_ohc=LKm4gI_YxqkQ7kNvwFGGp8O&_nc_oc=AdrDfWXFKTc-Q2Mz2jnJT2MJboi2ZakU02bE7T1m03Fx1ystinF-JWJqTSNckw8fE9E&_nc_ad=z-m&_nc_cid=1595&_nc_zt=23&_nc_ht=scontent.fpnh5-4.fna&_nc_ss=7a22e&oh=03_Q7cD5gGmS_-pU4GGvVrmm_n5cc-mrgnmJ_JZCvSYHyDmITU1Ug&oe=6A57494C')

        })
        $(document).on('click','#edit',function(){
            $('#exampleModalLabel').text("Update Employee")
            $('#save').hide()
            $('#update').show()

            const row=$(this).closest('tr')
            const id=row.find('td:eq(0)').text().trim()
            const name=row.find('td:eq(1)').text().trim()
            const position=row.find('td:eq(2)').text().trim()
            const salary=row.find('td:eq(3)').text().trim()
            const image=row.find('td:eq(4) img').attr('src')
            
            $('#id').val(id)
            $('#name').val(name)
            $('#position').val(position)
            $('#salary').val(salary)
            $('#image').attr('src',image)
            $('#update').click(function(){
                const id=$('#id').val()
                const name=$('#name').val()
                const position=$('#position').val()
                const salary=$('#salary').val()
                const file=$('#file')[0].files[0]
                const image=URL.createObjectURL(file)
                console.log(image);
                
                
                let formData=new FormData()
                formData.append('id',id);
                formData.append('name',name);
                formData.append('position',position);
                formData.append('salary',salary);
                formData.append('file',file);

                $.ajax({
                    url:'update.php',
                    method:'POST',
                    data:formData,
                    contentType:false,
                    processData:false,
                    success:function(txt){
                        if(txt=='success'){
                            row.find('td:eq(1)').text(name)
                            row.find('td:eq(2)').text(position)
                            row.find('td:eq(3)').text(salary)
                            row.find('td:eq(4) img').attr('src',image)
                        }
                    }
                })
            })
        })
    })

</script>