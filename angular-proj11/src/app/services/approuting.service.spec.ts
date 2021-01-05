import { TestBed } from '@angular/core/testing';

import { ApproutingService } from './approuting.service';

describe('ApproutingService', () => {
  let service: ApproutingService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ApproutingService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
