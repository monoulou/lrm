<?php

/* MAUserBundle:Profile:show.html.twig */
class __TwigTemplate_35406ecdd17df56796dfd7f79c6295c00ef0482363676eb2429350be7d5f11ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4df53bb5dad72ed56a8380703e767ca0138d233cf163c34ba8e5a87377530e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df53bb5dad72ed56a8380703e767ca0138d233cf163c34ba8e5a87377530e5f->enter($__internal_4df53bb5dad72ed56a8380703e767ca0138d233cf163c34ba8e5a87377530e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $__internal_c3fdeea6523c44d857b5cd99679bacadfd4f88bf4f032bfe136a895efb497821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fdeea6523c44d857b5cd99679bacadfd4f88bf4f032bfe136a895efb497821->enter($__internal_c3fdeea6523c44d857b5cd99679bacadfd4f88bf4f032bfe136a895efb497821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4df53bb5dad72ed56a8380703e767ca0138d233cf163c34ba8e5a87377530e5f->leave($__internal_4df53bb5dad72ed56a8380703e767ca0138d233cf163c34ba8e5a87377530e5f_prof);

        
        $__internal_c3fdeea6523c44d857b5cd99679bacadfd4f88bf4f032bfe136a895efb497821->leave($__internal_c3fdeea6523c44d857b5cd99679bacadfd4f88bf4f032bfe136a895efb497821_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b77c06ef6fb8a2cce8719f546e1a65f3f7ac9d386deea9c98d1ad9242346bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b77c06ef6fb8a2cce8719f546e1a65f3f7ac9d386deea9c98d1ad9242346bb8->enter($__internal_8b77c06ef6fb8a2cce8719f546e1a65f3f7ac9d386deea9c98d1ad9242346bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_78ef212b85db443a13af33a0ee9b0570b4e01a4307fcae9d8a63168fc0deb99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ef212b85db443a13af33a0ee9b0570b4e01a4307fcae9d8a63168fc0deb99f->enter($__internal_78ef212b85db443a13af33a0ee9b0570b4e01a4307fcae9d8a63168fc0deb99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "MAUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_78ef212b85db443a13af33a0ee9b0570b4e01a4307fcae9d8a63168fc0deb99f->leave($__internal_78ef212b85db443a13af33a0ee9b0570b4e01a4307fcae9d8a63168fc0deb99f_prof);

        
        $__internal_8b77c06ef6fb8a2cce8719f546e1a65f3f7ac9d386deea9c98d1ad9242346bb8->leave($__internal_8b77c06ef6fb8a2cce8719f546e1a65f3f7ac9d386deea9c98d1ad9242346bb8_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Profile:show.html.twig";
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
    {% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
