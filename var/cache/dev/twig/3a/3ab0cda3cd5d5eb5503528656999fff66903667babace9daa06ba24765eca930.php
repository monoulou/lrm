<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_13fe1726cf9788d239f24e1762fa2b2d5c55c39edeaa04ed480d6328a17b1de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a5935b9eb66e7fc80264827186fc12d80a2f324d5764557e79a900ebf08727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a5935b9eb66e7fc80264827186fc12d80a2f324d5764557e79a900ebf08727->enter($__internal_f7a5935b9eb66e7fc80264827186fc12d80a2f324d5764557e79a900ebf08727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_bd7926c53570a7f257ba904c0846dd3316e789027d4eb7531602bf11e065997f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7926c53570a7f257ba904c0846dd3316e789027d4eb7531602bf11e065997f->enter($__internal_bd7926c53570a7f257ba904c0846dd3316e789027d4eb7531602bf11e065997f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a5935b9eb66e7fc80264827186fc12d80a2f324d5764557e79a900ebf08727->leave($__internal_f7a5935b9eb66e7fc80264827186fc12d80a2f324d5764557e79a900ebf08727_prof);

        
        $__internal_bd7926c53570a7f257ba904c0846dd3316e789027d4eb7531602bf11e065997f->leave($__internal_bd7926c53570a7f257ba904c0846dd3316e789027d4eb7531602bf11e065997f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b19a62d1fb5973ee6d5ac9340a78717e1fbba2ab57314a3b448edd279fa7298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b19a62d1fb5973ee6d5ac9340a78717e1fbba2ab57314a3b448edd279fa7298->enter($__internal_7b19a62d1fb5973ee6d5ac9340a78717e1fbba2ab57314a3b448edd279fa7298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45d91e2c886e650358e6c1631fc2bf5157834d4e6997f230ebd6cdcd9facf60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d91e2c886e650358e6c1631fc2bf5157834d4e6997f230ebd6cdcd9facf60c->enter($__internal_45d91e2c886e650358e6c1631fc2bf5157834d4e6997f230ebd6cdcd9facf60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_45d91e2c886e650358e6c1631fc2bf5157834d4e6997f230ebd6cdcd9facf60c->leave($__internal_45d91e2c886e650358e6c1631fc2bf5157834d4e6997f230ebd6cdcd9facf60c_prof);

        
        $__internal_7b19a62d1fb5973ee6d5ac9340a78717e1fbba2ab57314a3b448edd279fa7298->leave($__internal_7b19a62d1fb5973ee6d5ac9340a78717e1fbba2ab57314a3b448edd279fa7298_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
