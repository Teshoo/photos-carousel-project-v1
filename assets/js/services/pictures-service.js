import axios from 'axios';

/**
 * @param {string|null} dayTripIri
 * @returns {Promise}
 */
export function fetchPictures(dayTripIri) {
    const params = {};
    if (dayTripIri) {
        params.dayTrip = dayTripIri;
    }

    return axios.get('api/pictures', { 
        params,
    });
}