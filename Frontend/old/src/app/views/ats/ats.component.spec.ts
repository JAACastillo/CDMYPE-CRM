import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AtsComponent } from './ats.component';

describe('AtsComponent', () => {
  let component: AtsComponent;
  let fixture: ComponentFixture<AtsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AtsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AtsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
