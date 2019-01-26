import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ConsultorComponent } from './consultor.component';

describe('ConsultorComponent', () => {
  let component: ConsultorComponent;
  let fixture: ComponentFixture<ConsultorComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ConsultorComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ConsultorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
