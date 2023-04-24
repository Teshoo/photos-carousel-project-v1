import axios from 'axios';

/**
 * @param {string|null} dayTripDate
 * @param {number|null} lat
 * @param {number|null} lng
 * @returns {Promise}
 */
export function fetchDayTemperature(dayTripDate, lat, lng) {
    const params = {};

    const date = dayTripDate.substring(0,10);

    if (dayTripDate) {
        params.latitude = lat;
        params.longitude = lng;
        params.start_date = date;
        params.end_date = date;
        params.hourly = 'temperature_2m';
        params.timezone = 'Asia/Tokyo';
    }

    return axios.get('https://archive-api.open-meteo.com/v1/era5', { 
        params,
    });
}