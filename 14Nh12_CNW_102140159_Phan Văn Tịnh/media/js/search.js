$(document).ready(function(e){
    let key_filter = "ALL";
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        key_filter = $(this).attr("key");
		const concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
    });
    
    $("#btn-search-phongban").on("click", (e) => {
        e.preventDefault();
        const nameSearch = $("#input-search").val();
        const body = {
            name: nameSearch,
            filter: key_filter,
        }
        handleSearch("phongban", body);
    })

    $("#btn-search-nhanvien").on("click", (e) => {
        e.preventDefault();
        const nameSearch = $("#input-search").val();
        const phongbanid = $("#btn-search-nhanvien").attr("phongbanid");
        const body = {
            name: nameSearch,
            filter: key_filter,
            phongban_id: phongbanid,
        }
        handleSearch("nhanvien", body);
    })

    const html_row = (table, row) => {
        let html_tmp = "";
        switch(table) {
            case "phongban": {
                html_tmp = `
                    <tr>
                        <td>${row.id}</td>
                        <td>${row.ma_pb}</td>
                        <td>${row.description}</td>
                        <td>${row.created_at}</td>
                        <td>
                            <a href="/nhanvien/phongban/${row.id}" ><button class="btn-common btn-view"><i class="fas fa-eye"></i></button>
                            <a href="/phongban/edit/${row.id}" ><button class="btn-common btn-edit"><i class="far fa-edit"></i></button>
                            <a href="/phongban/del/${row.id}" ><button class="btn-common btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                `;
                break;
            }
            case "nhanvien": {
                html_tmp = `
                    <tr>
                        <td>${row.id}</td>
                        <td>${row.ma_nv}</td>
                        <td>${row.fullname}</td>
                        <td>${row.address}</td>
                        <td>${row.phongban_id}</td>
                        <td>
                            <a href="/nhanvien/edit/${row.id}" ><button class="btn-common btn-edit"><i class="far fa-edit"></i></button>
                            <a href="/nhanvien/del/${row.id}" ><button class="btn-common btn-delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                `;
                break;
            }
        }
        
        return html_tmp;
    }

    const handleSearch = (table, body) => {
        $.ajax({
            url: `/${table}/get`,
            type: "POST",
            data: body,
            dataType: "JSON",
            success: (data) => {
                let htmls = "";
                if (data[0]) {
                    data.forEach(row => {
                        htmls += html_row(table, row);
                    })
                }
                $("#table-body-" + table).html(htmls);   
            }
        });
    }
});