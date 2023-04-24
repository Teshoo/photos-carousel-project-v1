import axios from 'axios';

/**
 * @param {string|null} dayTripIri
 * @returns {Promise}
 */
export function fetchHideouts(dayTripIri) {
    const params = {};
    if (dayTripIri) {
        params.dayTrip = dayTripIri;
    }

    return axios.get('api/hideouts', { 
        params,
    });
}