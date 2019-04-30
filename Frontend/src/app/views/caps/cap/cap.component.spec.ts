import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CapComponent } from './cap.component';

describe('CapComponent', () => {
  let component: CapComponent;
  let fixture: ComponentFixture<CapComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CapComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CapComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
