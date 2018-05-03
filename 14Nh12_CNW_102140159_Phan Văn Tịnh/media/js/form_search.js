$(document).ready(function(e){
    // $("#btn-search-phongban").on("click", (e) => {
    //     e.preventDefault();
    //     const nameSearch = $("#input-name-search").val();
    //     const body = {
    //         name: nameSearch,
    //     }
    //     handleSearch(body);
    // })

    $("#input-name-search").on("keyup", e => {
        const body = {
            name: e.target.value
        };
        handleSearch(body);
    })


    const html_row = (row) => {
        let html_tmp = "";
        html_tmp = `
                    <tr>
                        <td>${row.id}</td>
                        <td>${row.username}</td>
                        <td>${row.firstname}</td>
                        <td>${row.lastname}</td>
                        <td>${row.role}</td>
                        <td>
                            <a href="/user/edit/${row.id}" ><button class="btn-common btn-edit"><i class="far fa-edit"></i></button>
                            <a href="/user/del/${row.id}" ><button class="btn-common btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                `;
        
        return html_tmp;
    }

    const handleSearch = (body) => {
        $.ajax({
            url: `/user/get`,
            type: "POST",
            data: body,
            dataType: "JSON",
            success: (data) => {
                let htmls = "";
                if (data[0]) {
                    data.forEach(row => {
                        htmls += html_row(row);
                    })
                }
                $("#table-body-user").html(htmls);   
            }
        });
    }
});