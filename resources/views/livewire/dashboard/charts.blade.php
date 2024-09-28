<div class="grid lg:grid-cols-2 gap-4 sm:gap-6">
  
  <!-- Card -->
  <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
    <!-- Header -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-sm text-gray-500 dark:text-neutral-500">
          Pembagian Laporan Berdasarkan Layanan
        </h2>
        <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
          {{-- 80.3k --}}
        </p>
      </div>

      <div>
        {{-- <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-500">
          <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14" />
            <path d="m19 12-7 7-7-7" />
          </svg>
          2%
        </span> --}}
      </div>
    </div>
    <!-- End Header -->

    <div id="hs-single-area-chart"></div>
  </div>
  <!-- End Card -->
  
  <!-- Card -->
  <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
    <!-- Header -->
    <div class="flex justify-between items-center">
      <div>
        <h2 class="text-sm text-gray-500 dark:text-neutral-500">
          Jumlah Laporan Berdasarkan Kategori Layanan
        </h2>
        <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
          {{-- $126,238.49 --}}
        </p>
      </div>

      <div>
        <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
          <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14" />
            <path d="m19 12-7 7-7-7" />
          </svg>
          25%
        </span>
      </div>
    </div>
    <!-- End Header -->

    <div id="hs-multiple-bar-charts"></div>
  </div>
  <!-- End Card -->
</div>

<script>
  window.addEventListener("load", () => {
    (function () {
      buildChart(
        "#hs-multiple-bar-charts",
        (mode) => ({
          chart: {
            type: "bar",
            height: 300,
            toolbar: {
              show: false,
            },
            zoom: {
              enabled: false,
            },
          },
          series: [
            {
              name: "Chosen Period",
              data: [
                23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000,
                66000, 34000, 78000,
              ],
            },
            {
              name: "Last Period",
              data: [
                17000, 76000, 85000, 101000, 98000, 87000, 105000, 91000, 114000,
                94000, 67000, 66000,
              ],
            },
          ],
          plotOptions: {
            bar: {
              horizontal: false,
              columnWidth: "16px",
              borderRadius: 0,
            },
          },
          legend: {
            show: false,
          },
          dataLabels: {
            enabled: false,
          },
          stroke: {
            show: true,
            width: 8,
            colors: ["transparent"],
          },
          xaxis: {
            categories: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December",
            ],
            axisBorder: {
              show: false,
            },
            axisTicks: {
              show: false,
            },
            crosshairs: {
              show: false,
            },
            labels: {
              style: {
                colors: "#9ca3af",
                fontSize: "13px",
                fontFamily: "Inter, ui-sans-serif",
                fontWeight: 400,
              },
              offsetX: -2,
              formatter: (title) => title.slice(0, 3),
            },
          },
          yaxis: {
            labels: {
              align: "left",
              minWidth: 0,
              maxWidth: 140,
              style: {
                colors: "#9ca3af",
                fontSize: "13px",
                fontFamily: "Inter, ui-sans-serif",
                fontWeight: 400,
              },
              formatter: (value) => (value >= 1000 ? `${value / 1000}k` : value),
            },
          },
          states: {
            hover: {
              filter: {
                type: "darken",
                value: 0.9,
              },
            },
          },
          tooltip: {
            y: {
              formatter: (value) =>
                `$${value >= 1000 ? `${value / 1000}k` : value}`,
            },
            custom: function (props) {
              const { categories } = props.ctx.opts.xaxis;
              const { dataPointIndex } = props;
              const title = categories[dataPointIndex];
              const newTitle = `${title}`;

              return buildTooltip(props, {
                title: newTitle,
                mode,
                hasTextLabel: true,
                wrapperExtClasses: "min-w-28",
                labelDivider: ":",
                labelExtClasses: "ms-2",
              });
            },
          },
          responsive: [
            {
              breakpoint: 568,
              options: {
                chart: {
                  height: 300,
                },
                plotOptions: {
                  bar: {
                    columnWidth: "14px",
                  },
                },
                stroke: {
                  width: 8,
                },
                labels: {
                  style: {
                    colors: "#9ca3af",
                    fontSize: "11px",
                    fontFamily: "Inter, ui-sans-serif",
                    fontWeight: 400,
                  },
                  offsetX: -2,
                  formatter: (title) => title.slice(0, 3),
                },
                yaxis: {
                  labels: {
                    align: "left",
                    minWidth: 0,
                    maxWidth: 140,
                    style: {
                      colors: "#9ca3af",
                      fontSize: "11px",
                      fontFamily: "Inter, ui-sans-serif",
                      fontWeight: 400,
                    },
                    formatter: (value) =>
                      value >= 1000 ? `${value / 1000}k` : value,
                  },
                },
              },
            },
          ],
        }),
        {
          colors: ["#2563eb", "#d1d5db"],
          grid: {
            borderColor: "#e5e7eb",
          },
        },
        {
          colors: ["#6b7280", "#2563eb"],
          grid: {
            borderColor: "#404040",
          },
        }
      );
    })();
  });
</script>

<script>
  window.addEventListener("load", () => {
    (function () {
      buildChart(
        "#hs-single-area-chart",
        (mode) => ({
          chart: {
            height: 300,
            type: "pie",
            offsetY: 50,
          },
          series: [65, 35], // Internal: 65%, Eksternal: 35%
          labels: ["Internal", "Eksternal"],
          legend: {
            show: true,
            position: "bottom",
          },
          dataLabels: {
            enabled: true,
            formatter: function (val, opts) {
              return opts.w.globals.labels[opts.seriesIndex] + ": " + val.toFixed(1) + "%";
            },
          },
          tooltip: {
            y: {
              formatter: function (value) {
                return value.toFixed(1) + "%";
              },
            },
          },
          responsive: [
            {
              breakpoint: 568,
              options: {
                chart: {
                  height: 300,
                },
                legend: {
                  position: "bottom",
                },
              },
            },
          ],
        }),
        {
          colors: ["#facc15", "#208AEB"],
          fill: {
            gradient: {
              stops: [0, 90, 100],
            },
          },
          grid: {
            borderColor: "#e5e7eb",
          },
        },
        {
          colors: ["#3b82f6", "#a855f7"],
          fill: {
            gradient: {
              stops: [100, 90, 0],
            },
          },
          grid: {
            borderColor: "#404040",
          },
        }
      );
    })();
  });
</script>
