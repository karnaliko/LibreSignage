/*
*  SlideList class for storing and manipulating a list of slides.
*/

class SlideList {
	constructor() {
		this.slides = {};
	}

	filter(filter) {
		var ret = new SlideList();
		var add;
		for (var s in this.slides) {
			add = true;
			for (var k in filter) {
				if (this.slides[s].data[k]
						!= filter[k]) {
					add = false;
					break;
				}
			}
			if (add) {
				ret.slides[s] = this.slides[s];
			}
		}
		return ret;
	}

	next(index, wrap) {
		var n_d = -1, d = -1, n_i = 0;

		if (!this.length()) { return null; }
		for (var k in this.slides) {
			n_d = this.slides[k].get('index') - index;
			if (n_d > 0 && (n_d < d || d == -1)) {
				d = n_d;
			}
		}
		if (d == -1 && wrap) {
			return this.next(-1, false);
		} else if (d > 0) {
			n_i = index + d;
			for (var k in this.slides) {
				if (this.slides[k].get('index') == n_i) {
					return this.slides[k];
				}
			}
		}
		return null;
	}

	get() {
		return this.slides;
	}

	length() {
		return Object.keys(this.slides).length;
	}
}
