<?php

/* MAUserBundle:Registration:register.html.twig */
class __TwigTemplate_27837feb3b2471e09871860973fd0dedf50159248cbf3aec9307514e0b2e38ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ada661975ddc5838ce9419e531ebb72cda53029ef5dc35b647b659c14a0c6b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada661975ddc5838ce9419e531ebb72cda53029ef5dc35b647b659c14a0c6b87->enter($__internal_ada661975ddc5838ce9419e531ebb72cda53029ef5dc35b647b659c14a0c6b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $__internal_7e8465552058238598f33b3a72948d18d4ceb85394f28b790ca04b10cbd21c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8465552058238598f33b3a72948d18d4ceb85394f28b790ca04b10cbd21c2a->enter($__internal_7e8465552058238598f33b3a72948d18d4ceb85394f28b790ca04b10cbd21c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada661975ddc5838ce9419e531ebb72cda53029ef5dc35b647b659c14a0c6b87->leave($__internal_ada661975ddc5838ce9419e531ebb72cda53029ef5dc35b647b659c14a0c6b87_prof);

        
        $__internal_7e8465552058238598f33b3a72948d18d4ceb85394f28b790ca04b10cbd21c2a->leave($__internal_7e8465552058238598f33b3a72948d18d4ceb85394f28b790ca04b10cbd21c2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26f69264f07547be7254ec6c2e1f50929b9bc71cac37a568b545893be4080974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f69264f07547be7254ec6c2e1f50929b9bc71cac37a568b545893be4080974->enter($__internal_26f69264f07547be7254ec6c2e1f50929b9bc71cac37a568b545893be4080974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6e8a49c9a4744b2f34627634df4ef2a37b78cf512e76278594a8ef318b771b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e8a49c9a4744b2f34627634df4ef2a37b78cf512e76278594a8ef318b771b0->enter($__internal_c6e8a49c9a4744b2f34627634df4ef2a37b78cf512e76278594a8ef318b771b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "MAUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c6e8a49c9a4744b2f34627634df4ef2a37b78cf512e76278594a8ef318b771b0->leave($__internal_c6e8a49c9a4744b2f34627634df4ef2a37b78cf512e76278594a8ef318b771b0_prof);

        
        $__internal_26f69264f07547be7254ec6c2e1f50929b9bc71cac37a568b545893be4080974->leave($__internal_26f69264f07547be7254ec6c2e1f50929b9bc71cac37a568b545893be4080974_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Registration:register.html.twig";
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
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
