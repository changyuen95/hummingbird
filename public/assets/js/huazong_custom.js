var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);

var checkSearchParams = urlParams.has("search");
var getSearchParams = urlParams.get("search");

function displayRecentActivity() {
    const getPageNumber = "?page=" + urlParams.get("page");

    $.ajax({
        method: "GET",
        url: activityIndexApi + getPageNumber,
        success: (data) => {
            let fetchData = data.data.data;

            selectionGroups(fetchData);
            generateData(fetchData);
            generateActivityPagination(data.data);
        },
    });
}

function selectionGroups() {
    $(".recent-activity-group-selections").click(function () {
        let selectionValue = $(this).val();

        $.ajax({
            method: "GET",
            url: activityIndexApi,
            data: {
                type: "all",
            },
            success: (data) => {
                let fetchData = data.data;

                let fetchFilteredData = fetchData.filter(function (item) {
                    return item.host.group_id == parseInt(selectionValue);
                });

                if (selectionValue == "all") {
                    fetchFilteredData = fetchData;
                }

                $(".event-state-content").empty();

                generateData(fetchFilteredData);
            },
        });
    });
}

function generateData(data) {
    data.forEach((item) => {
        let activityHTML = generateActivityHTML(item);

        $(".event-state-content").append(activityHTML);
    });
}

function generateActivityPagination(data) {
    let paginationHTML = generateActivityPaginationHTML(data);
    $(".event-state-pagination-ul").html(paginationHTML);
}

function fetchArrowPaginationValue(arrowPage) {
    const urlObject = new URL(arrowPage);
    const pageValue = urlObject.searchParams.get("page");

    return pageValue;
}

function generateActivityPaginationHTML(data) {
    const from = 1;
    const to = data.last_page;
    let path = window.location.pathname + "?page=";

    if (checkSearchParams) {
        path =
            window.location.pathname + "?search=" + getSearchParams + "&page=";
    }

    const prevPage = data.prev_page_url
        ? path + fetchArrowPaginationValue(data.prev_page_url)
        : path + from;

    const nextPage = data.next_page_url
        ? path + fetchArrowPaginationValue(data.next_page_url)
        : path + to;

    const pageNumbers = Array.from(
        { length: to - from + 1 },
        (_, index) => index + from
    );

    let paginationHTML = `<li class="page-item">
            <a class="page-link" href="${prevPage}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>`;

    pageNumbers.forEach((pageNumber) => {
        paginationHTML += `<li class="page-item"><a class="page-link event-page-custom-link" href=${
            path + pageNumber
        }>${pageNumber}</a></li>`;
    });

    paginationHTML += `<li class="page-item">
            <a class="page-link" href="${nextPage}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>`;

    return paginationHTML;
}

function generateActivityHTML(item) {
    let eventDetailRoute = window.location.origin + "/event-detail/" + item.id;

    return `
    <div class="col-lg-4 col-md-6">
        <div class="event-three__single">
            <div class="event-three__image">
                <img style="height:17.5rem; ${
                    item.image ? "object-fit:contain;" : "object-fit:cover;"
                }" src="${
        item.image
            ? item.image.name
            : window.location.origin + "/assets/images/dummy_image.jpg"
    }" alt="">
            </div><!-- /.event-three__image -->
            <div class="event-three__content">
                <span>${
                    item.formatted_publish_date ?? item.formatted_created_at
                }</span>
                <h3 style="font-size: 17px;line-height: 1.6;"><a href="${eventDetailRoute}">${
        item.title
    }</a></h3>
                <a href="${eventDetailRoute}" class="thm-btn event-three__btn" style="border-radius: 10px;">阅读更多</a>
            </div>         
        </div>
    </div>
`;
}

function fetchSearchParamData() {
    let searchRoute = $(".recent-search-route").data("search-route");

    $(".event-state-content").empty();

    $.ajax({
        method: "GET",
        url: searchRoute,
        data: {
            search: getSearchParams,
        },
        success: (data) => {
            generateData(data.data.data);
            generateActivityPagination(data.data);
        },
    });
}

if (!checkSearchParams) {
    displayRecentActivity();
} else {
    fetchSearchParamData();
}

selectionGroups();
