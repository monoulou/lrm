<?php

/* MAUserBundle:Security:login.html.twig */
class __TwigTemplate_4f46276a541efdf20b368e3ab3dca07bddd737a11593095285d9efddf38e9b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Security:login.html.twig", 2);
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
        $__internal_8888bdb4fc1b9908f5279a5af00a220ff1346cc439d2b55a05f93178358a4659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8888bdb4fc1b9908f5279a5af00a220ff1346cc439d2b55a05f93178358a4659->enter($__internal_8888bdb4fc1b9908f5279a5af00a220ff1346cc439d2b55a05f93178358a4659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $__internal_2d502647f37f0cca7c596d3a50419c3adc794b1ed3516fd2e0f7267c04c6bfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d502647f37f0cca7c596d3a50419c3adc794b1ed3516fd2e0f7267c04c6bfa0->enter($__internal_2d502647f37f0cca7c596d3a50419c3adc794b1ed3516fd2e0f7267c04c6bfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8888bdb4fc1b9908f5279a5af00a220ff1346cc439d2b55a05f93178358a4659->leave($__internal_8888bdb4fc1b9908f5279a5af00a220ff1346cc439d2b55a05f93178358a4659_prof);

        
        $__internal_2d502647f37f0cca7c596d3a50419c3adc794b1ed3516fd2e0f7267c04c6bfa0->leave($__internal_2d502647f37f0cca7c596d3a50419c3adc794b1ed3516fd2e0f7267c04c6bfa0_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d3a489efb5630b47f4a344cb35db81a430c9f6958ce38521dc637578c02555ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a489efb5630b47f4a344cb35db81a430c9f6958ce38521dc637578c02555ec->enter($__internal_d3a489efb5630b47f4a344cb35db81a430c9f6958ce38521dc637578c02555ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_236f970f176d3858f4f09bf78418cafc9401bdd3017c3db1314878749fe3e3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236f970f176d3858f4f09bf78418cafc9401bdd3017c3db1314878749fe3e3f4->enter($__internal_236f970f176d3858f4f09bf78418cafc9401bdd3017c3db1314878749fe3e3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_236f970f176d3858f4f09bf78418cafc9401bdd3017c3db1314878749fe3e3f4->leave($__internal_236f970f176d3858f4f09bf78418cafc9401bdd3017c3db1314878749fe3e3f4_prof);

        
        $__internal_d3a489efb5630b47f4a344cb35db81a430c9f6958ce38521dc637578c02555ec->leave($__internal_d3a489efb5630b47f4a344cb35db81a430c9f6958ce38521dc637578c02555ec_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "MAUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
