import axios from 'axios';

/**
 * @param {string|null} tripIri
 * @returns {Promise}
 */
export function fetchDayTrips(tripIri) {
    const params = {};
    if (tripIri) {
        params.trip = tripIri;
    }

    return axios.get('api/day_trips', { 
        params,
    });
}