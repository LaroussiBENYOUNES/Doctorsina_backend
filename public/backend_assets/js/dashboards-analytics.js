/**
 * Dashboard Analytics
 */

'use strict';

(function () {
  let cardColor, headingColor, axisColor, shadeColor, borderColor;

  cardColor = config.colors.white;
  headingColor = config.colors.headingColor;
  axisColor = config.colors.axisColor;
  borderColor = config.colors.borderColor;

  // Total Revenue Report Chart - Bar Chart
  // --------------------------------------------------------------------
  /*for (let i=0;i<Mydata.length;i++){
    for (let j=0;j<Mydata[i]["values"].length;j++){
      //console.log(Mydata[i]["values"][j])
    }

  }*/

  const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
    totalRevenueChartOptions = {
      series : Weightdata,

      chart: {
        height: 300,
        stacked: true,
        type: 'bar',
        toolbar: { show: false }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '33%',
          borderRadius: 12,
          startingShape: 'rounded',
          endingShape: 'rounded'
        }
      },
      colors: [config.colors.primary, config.colors.info],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 6,
        lineCap: 'round',
        colors: [cardColor]
      },
      legend: {
        show: true,
        horizontalAlign: 'left',
        position: 'top',
        markers: {
          height: 8,
          width: 8,
          radius: 12,
          offsetX: -3
        },
        labels: {
          colors: axisColor
        },
        itemMargin: {
          horizontal: 10
        }
      },
      grid: {
        borderColor: borderColor,
        padding: {
          top: 0,
          bottom: -8,
          left: 20,
          right: 20
        }
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        labels: {
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        },
        axisTicks: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        labels: {
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        }
      },
      responsive: [
        {
          breakpoint: 1700,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '32%'
              }
            }
          }
        },
        {
          breakpoint: 1580,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '35%'
              }
            }
          }
        },
        {
          breakpoint: 1440,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '42%'
              }
            }
          }
        },
        {
          breakpoint: 1300,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '48%'
              }
            }
          }
        },
        {
          breakpoint: 1200,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '40%'
              }
            }
          }
        },
        {
          breakpoint: 1040,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 11,
                columnWidth: '48%'
              }
            }
          }
        },
        {
          breakpoint: 991,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '30%'
              }
            }
          }
        },
        {
          breakpoint: 840,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '35%'
              }
            }
          }
        },
        {
          breakpoint: 768,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '28%'
              }
            }
          }
        },
        {
          breakpoint: 640,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '32%'
              }
            }
          }
        },
        {
          breakpoint: 576,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '37%'
              }
            }
          }
        },
        {
          breakpoint: 480,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '45%'
              }
            }
          }
        },
        {
          breakpoint: 420,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '52%'
              }
            }
          }
        },
        {
          breakpoint: 380,
          options: {
            plotOptions: {
              bar: {
                borderRadius: 10,
                columnWidth: '60%'
              }
            }
          }
        }
      ],
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
    const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
    totalRevenueChart.render();
  }

  // Growth Chart - Radial Bar Chart
  // --------------------------------------------------------------------
  const growthChartEl = document.querySelector('#growthChart'),
    growthChartOptions = {
      series: ProfileLevel,
      labels: ['Profile Completion'],
      chart: {
        height: 240,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          size: 150,
          offsetY: 10,
          startAngle: -150,
          endAngle: 150,
          hollow: {
            size: '55%'
          },
          track: {
            background: cardColor,
            strokeWidth: '100%'
          },
          dataLabels: {
            name: {
              offsetY: 15,
              color: headingColor,
              fontSize: '15px',
              fontWeight: '600',
              fontFamily: 'Public Sans'
            },
            value: {
              offsetY: -25,
              color: headingColor,
              fontSize: '22px',
              fontWeight: '500',
              fontFamily: 'Public Sans'
            }
          }
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          shadeIntensity: 0.5,
          gradientToColors: [config.colors.primary],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 0.6,
          stops: [30, 70, 100]
        }
      },
      stroke: {
        dashArray: 5
      },
      grid: {
        padding: {
          top: -35,
          bottom: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof growthChartEl !== undefined && growthChartEl !== null) {
    const growthChart = new ApexCharts(growthChartEl, growthChartOptions);
    growthChart.render();
  }

  // Profit Report Line Chart 2
  // --------------------------------------------------------------------
  const profileReportChartEl = document.querySelector('#profileReportChart'),
    profileReportChartConfig = {
      chart: {
        height: 80,
        // width: 175,
        type: 'line',
        toolbar: {
          show: false
        },
        dropShadow: {
          enabled: true,
          top: 10,
          left: 5,
          blur: 3,
          color: config.colors.warning,
          opacity: 0.15
        },
        sparkline: {
          enabled: true
        }
      },
      grid: {
        show: false,
        padding: {
          right: 8
        }
      },
      colors: [config.colors.warning],
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 5,
        curve: 'smooth'
      },
      series: [
        {
          data: [110, 270, 145, 245, 205, 285]
        }
      ],
      xaxis: {
        show: false,
        lines: {
          show: false
        },
        labels: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        show: false
      }
    };
  if (typeof profileReportChartEl !== undefined && profileReportChartEl !== null) {
    const profileReportChart = new ApexCharts(profileReportChartEl, profileReportChartConfig);
    profileReportChart.render();
  }
  const profileReportChartEl1 = document.querySelector('#profileReportChart1'),
  profileReportChartConfig1 = {
    chart: {
      height: 80,
      // width: 175,
      type: 'line',
      toolbar: {
        show: false
      },
      dropShadow: {
        enabled: true,
        top: 10,
        left: 5,
        blur: 3,
        color: config.colors.warning,
        opacity: 0.15
      },
      sparkline: {
        enabled: true
      }
    },
    grid: {
      show: false,
      padding: {
        right: 8
      }
    },
    colors: [config.colors.warning],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 5,
      curve: 'smooth'
    },
    series: [
      {
        data: [110, 270, 145, 245, 205, 285]
      }
    ],
    xaxis: {
      show: false,
      lines: {
        show: false
      },
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: {
      show: false
    }
  };
if (typeof profileReportChartEl1 !== undefined && profileReportChartEl1 !== null) {
  const profileReportChart = new ApexCharts(profileReportChartEl1, profileReportChartConfig1);
  profileReportChart.render();
}
const profileReportChartEl2 = document.querySelector('#profileReportChart2'),
profileReportChartConfig2 = {
  chart: {
    height: 80,
    // width: 175,
    type: 'line',
    toolbar: {
      show: false
    },
    dropShadow: {
      enabled: true,
      top: 10,
      left: 5,
      blur: 3,
      color: config.colors.warning,
      opacity: 0.15
    },
    sparkline: {
      enabled: true
    }
  },
  grid: {
    show: false,
    padding: {
      right: 8
    }
  },
  colors: [config.colors.warning],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 5,
    curve: 'smooth'
  },
  series: [
    {
      data: [110, 270, 145, 245, 205, 285]
    }
  ],
  xaxis: {
    show: false,
    lines: {
      show: false
    },
    labels: {
      show: false
    },
    axisBorder: {
      show: false
    }
  },
  yaxis: {
    show: false
  }
};
if (typeof profileReportChartEl2 !== undefined && profileReportChartEl2 !== null) {
const profileReportChart2 = new ApexCharts(profileReportChartEl2, profileReportChartConfig2);
profileReportChart2.render();
}

const profileReportChartEl3 = document.querySelector('#profileReportChart3'),
profileReportChartConfig3 = {
  chart: {
    height: 80,
    // width: 175,
    type: 'line',
    toolbar: {
      show: false
    },
    dropShadow: {
      enabled: true,
      top: 10,
      left: 5,
      blur: 3,
      color: config.colors.warning,
      opacity: 0.15
    },
    sparkline: {
      enabled: true
    }
  },
  grid: {
    show: false,
    padding: {
      right: 8
    }
  },
  colors: [config.colors.warning],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 5,
    curve: 'smooth'
  },
  series: [
    {
      data: [110, 270, 145, 245, 205, 285]
    }
  ],
  xaxis: {
    show: false,
    lines: {
      show: false
    },
    labels: {
      show: false
    },
    axisBorder: {
      show: false
    }
  },
  yaxis: {
    show: false
  }
};
if (typeof profileReportChartEl3 !== undefined && profileReportChartEl3 !== null) {
const profileReportChart3 = new ApexCharts(profileReportChartEl3, profileReportChartConfig3);
profileReportChart3.render();
}
const profileReportChartEl4 = document.querySelector('#GlucosesChart'),
profileReportChartConfig4 = {
  chart: {
    height: 80,
    // width: 175,
    type: 'line',
    toolbar: {
      show: false
    },
    dropShadow: {
      enabled: true,
      top: 10,
      left: 5,
      blur: 3,
      color: config.colors.warning,
      opacity: 0.15
    },
    sparkline: {
      enabled: true
    }
  },
  grid: {
    show: false,
    padding: {
      right: 8
    }
  },
  colors: [config.colors.warning],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 5,
    curve: 'smooth'
  },
  series: [
    {
      data: glucoseData
    }
  ],
  xaxis: {
    categories: glucoseDates,
    axisBorder: {
      show: true
    },
    axisTicks: {
      show: false
    },
    labels: {
      show: true,
      style: {
        fontSize: '13px',
        colors: axisColor
      }
    }
  },
  yaxis: {
    show: false
  }
};
if (typeof profileReportChartEl4 !== undefined && profileReportChartEl4 !== null) {
const profileReportChart4 = new ApexCharts(profileReportChartEl4, profileReportChartConfig4);
profileReportChart4.render();
}
// blood pressure chart
// -------------------------------------------------------
const profileReportChartEl6 = document.querySelector('#BloodPressureChart'),
profileReportChartConfig6 = {
  chart: {
    height: 80,
    // width: 175,
    type: 'line',
    toolbar: {
      show: false
    },
    dropShadow: {
      enabled: true,
      top: 10,
      left: 5,
      blur: 3,
      color: config.colors.warning,
      opacity: 0.15
    },
    sparkline: {
      enabled: true
    }
  },
  grid: {
    show: false,
    padding: {
      right: 8
    }
  },
  colors: [config.colors.warning],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 5,
    curve: 'smooth'
  },
  series: [
    {
      data: heartRateData
    }
  ],
  xaxis: {
    categories: heartRateDates,
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    labels: {
      show: true,
      style: {
        fontSize: '13px',
        colors: axisColor
      }
    }
  },
  yaxis: {
    show: false
  }
};
if (typeof profileReportChartEl6 !== undefined && profileReportChartEl6 !== null) {
const profileReportChart6= new ApexCharts(profileReportChartEl6, profileReportChartConfig6);
profileReportChart6.render();
}
//----------------------------------------------------------------------------------------
  // Order Statistics Chart
  // --------------------------------------------------------------------
  const chartOrderStatistics = document.querySelector('#orderStatisticsChart'),
    orderChartConfig = {
      chart: {
        height: 165,
        width: 130,
        type: 'donut'
      },
      labels: ['Electronic', 'Sports', 'Decor', 'Fashion'],
      series: [85, 15, 50, 50],
      colors: [config.colors.primary, config.colors.secondary, config.colors.info, config.colors.success],
      stroke: {
        width: 5,
        colors: cardColor
      },
      dataLabels: {
        enabled: false,
        formatter: function (val, opt) {
          return parseInt(val) + '%';
        }
      },
      legend: {
        show: false
      },
      grid: {
        padding: {
          top: 0,
          bottom: 0,
          right: 15
        }
      },
      plotOptions: {
        pie: {
          donut: {
            size: '75%',
            labels: {
              show: true,
              value: {
                fontSize: '1.5rem',
                fontFamily: 'Public Sans',
                color: headingColor,
                offsetY: -15,
                formatter: function (val) {
                  return parseInt(val) + '%';
                }
              },
              name: {
                offsetY: 20,
                fontFamily: 'Public Sans'
              },
              total: {
                show: true,
                fontSize: '0.8125rem',
                color: axisColor,
                label: 'Weekly',
                formatter: function (w) {
                  return '38%';
                }
              }
            }
          }
        }
      }
    };
  if (typeof chartOrderStatistics !== undefined && chartOrderStatistics !== null) {
    const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
    statisticsChart.render();
  }

  // Glucose Chart - Area chart
  // --------------------------------------------------------------------
  const incomeChartEl = document.querySelector('#GlucoseChart'),
    incomeChartConfig = {
      series: [
        {
          data: glucoseData.reverse()
        }
      ],
      chart: {
        height: 215,
        parentHeightOffset: 0,
        parentWidthOffset: 0,
        toolbar: {
          show: false
        },
        type: 'area'
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      legend: {
        show: false
      },
      markers: {
        size: 6,
        colors: 'transparent',
        strokeColors: 'transparent',
        strokeWidth: 4,
        discrete: [
          {
            fillColor: config.colors.white,
            seriesIndex: 0,
            dataPointIndex: 7,
            strokeColor: config.colors.primary,
            strokeWidth: 2,
            size: 6,
            radius: 8
          }
        ],
        hover: {
          size: 7
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: shadeColor,
          shadeIntensity: 0.6,
          opacityFrom: 0.5,
          opacityTo: 0.25,
          stops: [0, 95, 100]
        }
      },
      grid: {
        borderColor: borderColor,
        strokeDashArray: 3,
        padding: {
          top: -20,
          bottom: -8,
          left: -10,
          right: 8
        }
      },
      xaxis: {
        categories: glucoseDates.reverse(),
        axisBorder: {
          show: true
        },
        axisTicks: {
          show: false
        },
        labels: {
          show: true,
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        },
        min: 10,
        max: 50,
        tickAmount: 4
      }
    };
  if (typeof incomeChartEl !== undefined && incomeChartEl !== null) {
    const incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
    incomeChart.render();
  }



  // Expenses Mini Chart - Radial Chart
  // --------------------------------------------------------------------
  const weeklyExpensesEl = document.querySelector('#expensesOfWeek'),
    weeklyExpensesConfig = {
      series: [65],
      chart: {
        width: 60,
        height: 60,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          startAngle: 0,
          endAngle: 360,
          strokeWidth: '8',
          hollow: {
            margin: 2,
            size: '45%'
          },
          track: {
            strokeWidth: '50%',
            background: borderColor
          },
          dataLabels: {
            show: true,
            name: {
              show: false
            },
            value: {
              formatter: function (val) {
                return '$' + parseInt(val);
              },
              offsetY: 5,
              color: '#697a8d',
              fontSize: '13px',
              show: true
            }
          }
        }
      },
      fill: {
        type: 'solid',
        colors: config.colors.primary
      },
      stroke: {
        lineCap: 'round'
      },
      grid: {
        padding: {
          top: -10,
          bottom: -15,
          left: -10,
          right: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof weeklyExpensesEl !== undefined && weeklyExpensesEl !== null) {
    const weeklyExpenses = new ApexCharts(weeklyExpensesEl, weeklyExpensesConfig);
    weeklyExpenses.render();
  }
// Expenses Mini Chart - Radial Chart
  // --------------------------------------------------------------------
  const weeklyExpensesEl2 = document.querySelector('#expensesOfWeek2'),
    weeklyExpensesConfig2 = {
      series: [65],
      chart: {
        width: 60,
        height: 60,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          startAngle: 0,
          endAngle: 360,
          strokeWidth: '8',
          hollow: {
            margin: 2,
            size: '45%'
          },
          track: {
            strokeWidth: '50%',
            background: borderColor
          },
          dataLabels: {
            show: true,
            name: {
              show: false
            },
            value: {
              formatter: function (val) {
                return '$' + parseInt(val);
              },
              offsetY: 5,
              color: '#697a8d',
              fontSize: '13px',
              show: true
            }
          }
        }
      },
      fill: {
        type: 'solid',
        colors: config.colors.primary
      },
      stroke: {
        lineCap: 'round'
      },
      grid: {
        padding: {
          top: -10,
          bottom: -15,
          left: -10,
          right: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof weeklyExpensesEl2 !== undefined && weeklyExpensesEl2 !== null) {
    const weeklyExpenses2 = new ApexCharts(weeklyExpensesEl2, weeklyExpensesConfig2);
    weeklyExpenses2.render();
  }

  // Income Chart - Area chart
  // --------------------------------------------------------------------
  const incomeChartEl2 = document.querySelector('#BloodPressureChart'),
    incomeChartConfig2 = {
      series: [
        {
          data: bloodPressureData.reverse()
        }
      ],
      chart: {
        height: 215,
        parentHeightOffset: 0,
        parentWidthOffset: 0,
        toolbar: {
          show: false
        },
        type: 'area'
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      legend: {
        show: false
      },
      markers: {
        size: 6,
        colors: 'transparent',
        strokeColors: 'transparent',
        strokeWidth: 4,
        discrete: [
          {
            fillColor: config.colors.white,
            seriesIndex: 0,
            dataPointIndex: 7,
            strokeColor: config.colors.primary,
            strokeWidth: 2,
            size: 6,
            radius: 8
          }
        ],
        hover: {
          size: 7
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: shadeColor,
          shadeIntensity: 0.6,
          opacityFrom: 0.5,
          opacityTo: 0.25,
          stops: [0, 95, 100]
        }
      },
      grid: {
        borderColor: borderColor,
        strokeDashArray: 3,
        padding: {
          top: -20,
          bottom: -8,
          left: -10,
          right: 8
        }
      },
      xaxis: {
        categories: bloodPressureDates.reverse(),
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          show: true,
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        },
        min: 10,
        max: 50,
        tickAmount: 4
      }
    };
  if (typeof incomeChartEl2 !== undefined && incomeChartEl2 !== null) {
    const incomeChart2 = new ApexCharts(incomeChartEl2, incomeChartConfig2);
    incomeChart2.render();
  }

  // weight Chart
  // --------------------------------------------------------------------
  const incomeChartEl4 = document.querySelector('#WeightChart'),
    incomeChartConfig4 = {
      series: [
        {
          data: Weightdata.reverse()
        }
      ],
      chart: {
        height: 215,
        parentHeightOffset: 0,
        parentWidthOffset: 0,
        toolbar: {
          show: false
        },
        type: 'area'
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      legend: {
        show: false
      },
      markers: {
        size: 6,
        colors: 'transparent',
        strokeColors: 'transparent',
        strokeWidth: 4,
        discrete: [
          {
            fillColor: config.colors.white,
            seriesIndex: 0,
            dataPointIndex: 7,
            strokeColor: config.colors.primary,
            strokeWidth: 2,
            size: 6,
            radius: 8
          }
        ],
        hover: {
          size: 7
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: shadeColor,
          shadeIntensity: 0.6,
          opacityFrom: 0.5,
          opacityTo: 0.25,
          stops: [0, 95, 100]
        }
      },
      grid: {
        borderColor: borderColor,
        strokeDashArray: 3,
        padding: {
          top: -20,
          bottom: -8,
          left: -10,
          right: 8
        }
      },
      xaxis: {
        categories: WeightDates.reverse(),
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          show: true,
          style: {
            fontSize: '13px',
            colors: axisColor
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        },
        min: 10,
        max: 50,
        tickAmount: 4
      }
    };
  if (typeof incomeChartEl4 !== undefined && incomeChartEl4 !== null) {
    const incomeChart4 = new ApexCharts(incomeChartEl4, incomeChartConfig4);
    incomeChart4.render();
  }
 // --------------------------------------------------------------------
// Temperature Chart
const incomeChartEl5 = document.querySelector('#TemperatureChart'),
incomeChartConfig5 = {
  series: [
    {
      data: temperatureData.reverse()
    }
  ],
  chart: {
    height: 215,
    parentHeightOffset: 0,
    parentWidthOffset: 0,
    toolbar: {
      show: false
    },
    type: 'area'
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 2,
    curve: 'smooth'
  },
  legend: {
    show: false
  },
  markers: {
    size: 6,
    colors: 'transparent',
    strokeColors: 'transparent',
    strokeWidth: 4,
    discrete: [
      {
        fillColor: config.colors.white,
        seriesIndex: 0,
        dataPointIndex: 7,
        strokeColor: config.colors.primary,
        strokeWidth: 2,
        size: 6,
        radius: 8
      }
    ],
    hover: {
      size: 7
    }
  },
  colors: [config.colors.primary],
  fill: {
    type: 'gradient',
    gradient: {
      shade: shadeColor,
      shadeIntensity: 0.6,
      opacityFrom: 0.5,
      opacityTo: 0.25,
      stops: [0, 95, 100]
    }
  },
  grid: {
    borderColor: borderColor,
    strokeDashArray: 3,
    padding: {
      top: -20,
      bottom: -8,
      left: -10,
      right: 8
    }
  },
  xaxis: {
    categories: temperatureDates.reverse(),
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    labels: {
      show: true,
      style: {
        fontSize: '13px',
        colors: axisColor
      }
    }
  },
  yaxis: {
    labels: {
      show: false
    },
    min: 10,
    max: 50,
    tickAmount: 4
  }
};
if (typeof incomeChartEl5 !== undefined && incomeChartEl5 !== null) {
const incomeChart5 = new ApexCharts(incomeChartEl5, incomeChartConfig5);
incomeChart5.render();
}
 // --------------------------------------------------------------------
  // Hemoglobin Chart
  // --------------------------------------------------------------------
  const incomeChartEl6 = document.querySelector('#HemoglobinChart'),
incomeChartConfig6 = {
  series: [
    {
      data: hemoglobinData.reverse()
    }
  ],
  chart: {
    height: 215,
    parentHeightOffset: 0,
    parentWidthOffset: 0,
    toolbar: {
      show: false
    },
    type: 'area'
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 2,
    curve: 'smooth'
  },
  legend: {
    show: false
  },
  markers: {
    size: 6,
    colors: 'transparent',
    strokeColors: 'transparent',
    strokeWidth: 4,
    discrete: [
      {
        fillColor: config.colors.white,
        seriesIndex: 0,
        dataPointIndex: 7,
        strokeColor: config.colors.primary,
        strokeWidth: 2,
        size: 6,
        radius: 8
      }
    ],
    hover: {
      size: 7
    }
  },
  colors: [config.colors.primary],
  fill: {
    type: 'gradient',
    gradient: {
      shade: shadeColor,
      shadeIntensity: 0.6,
      opacityFrom: 0.5,
      opacityTo: 0.25,
      stops: [0, 95, 100]
    }
  },
  grid: {
    borderColor: borderColor,
    strokeDashArray: 3,
    padding: {
      top: -20,
      bottom: -8,
      left: -10,
      right: 8
    }
  },
  xaxis: {
    categories: hemoglobinDates.reverse(),
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    labels: {
      show: true,
      style: {
        fontSize: '13px',
        colors: axisColor
      }
    }
  },
  yaxis: {
    labels: {
      show: false
    },
    min: 10,
    max: 50,
    tickAmount: 4
  }
};
if (typeof incomeChartEl6 !== undefined && incomeChartEl6 !== null) {
const incomeChart6 = new ApexCharts(incomeChartEl6, incomeChartConfig6);
incomeChart6.render();
}
  // --------------------------------------------------------------------
  // HeartRate Chart
  // --------------------------------------------------------------------
  const incomeChartEl7 = document.querySelector('#HeartRateChart'),
  incomeChartConfig7= {
    series: [
      {
        data: heartRateData.reverse()
      }
    ],
    chart: {
      height: 215,
      parentHeightOffset: 0,
      parentWidthOffset: 0,
      toolbar: {
        show: false
      },
      type: 'area'
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: 2,
      curve: 'smooth'
    },
    legend: {
      show: false
    },
    markers: {
      size: 6,
      colors: 'transparent',
      strokeColors: 'transparent',
      strokeWidth: 4,
      discrete: [
        {
          fillColor: config.colors.white,
          seriesIndex: 0,
          dataPointIndex: 7,
          strokeColor: config.colors.primary,
          strokeWidth: 2,
          size: 6,
          radius: 8
        }
      ],
      hover: {
        size: 7
      }
    },
    colors: [config.colors.primary],
    fill: {
      type: 'gradient',
      gradient: {
        shade: shadeColor,
        shadeIntensity: 0.6,
        opacityFrom: 0.5,
        opacityTo: 0.25,
        stops: [0, 95, 100]
      }
    },
    grid: {
      borderColor: borderColor,
      strokeDashArray: 3,
      padding: {
        top: -20,
        bottom: -8,
        left: -10,
        right: 8
      }
    },
    xaxis: {
      categories: heartRateDates.reverse(),
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      labels: {
        show: true,
        style: {
          fontSize: '13px',
          colors: axisColor
        }
      }
    },
    yaxis: {
      labels: {
        show: false
      },
      min: 10,
      max: 50,
      tickAmount: 4
    }
  };
  if (typeof incomeChartEl7 !== undefined && incomeChartEl7 !== null) {
  const incomeChart7 = new ApexCharts(incomeChartEl7, incomeChartConfig7);
  incomeChart7.render();
  }

})();
