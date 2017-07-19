<?php

/* client/index.html.twig */
class __TwigTemplate_342238c9672cde0ab07f15f224579737874f2aa3e6dacb8b276eb4e0fc048528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6102c87b7ca60d4a05462a59ac76e65cb7b6bcb5dc683d4e4eb412e61cea7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6102c87b7ca60d4a05462a59ac76e65cb7b6bcb5dc683d4e4eb412e61cea7ad->enter($__internal_c6102c87b7ca60d4a05462a59ac76e65cb7b6bcb5dc683d4e4eb412e61cea7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_99e075bb7dbec90dbbb8eedc31d198500313c6178813b3d35c2b4442c1e2557b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e075bb7dbec90dbbb8eedc31d198500313c6178813b3d35c2b4442c1e2557b->enter($__internal_99e075bb7dbec90dbbb8eedc31d198500313c6178813b3d35c2b4442c1e2557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6102c87b7ca60d4a05462a59ac76e65cb7b6bcb5dc683d4e4eb412e61cea7ad->leave($__internal_c6102c87b7ca60d4a05462a59ac76e65cb7b6bcb5dc683d4e4eb412e61cea7ad_prof);

        
        $__internal_99e075bb7dbec90dbbb8eedc31d198500313c6178813b3d35c2b4442c1e2557b->leave($__internal_99e075bb7dbec90dbbb8eedc31d198500313c6178813b3d35c2b4442c1e2557b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5add378d8c6d5feab3b8f4e2833452ca81d86144bf6bcabe1e851df4b4ba4f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5add378d8c6d5feab3b8f4e2833452ca81d86144bf6bcabe1e851df4b4ba4f03->enter($__internal_5add378d8c6d5feab3b8f4e2833452ca81d86144bf6bcabe1e851df4b4ba4f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94d5eeb650a598c06ead31f4fa996ac105600a8648fea999432497d41e131256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d5eeb650a598c06ead31f4fa996ac105600a8648fea999432497d41e131256->enter($__internal_94d5eeb650a598c06ead31f4fa996ac105600a8648fea999432497d41e131256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Denomination</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Nomcontact</th>
                <th>Fonctioncontact</th>
                <th>Etat</th>
                <th>Commentaire</th>
                <th>Createdate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "denomination", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nomContact", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "fonctionContact", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "etat", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "commentaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "createDate", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_client_new");
        echo "\">Create a new client</a>
        </li>
    </ul>
";
        
        $__internal_94d5eeb650a598c06ead31f4fa996ac105600a8648fea999432497d41e131256->leave($__internal_94d5eeb650a598c06ead31f4fa996ac105600a8648fea999432497d41e131256_prof);

        
        $__internal_5add378d8c6d5feab3b8f4e2833452ca81d86144bf6bcabe1e851df4b4ba4f03->leave($__internal_5add378d8c6d5feab3b8f4e2833452ca81d86144bf6bcabe1e851df4b4ba4f03_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  135 => 45,  123 => 39,  117 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Clients list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Denomination</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Nomcontact</th>
                <th>Fonctioncontact</th>
                <th>Etat</th>
                <th>Commentaire</th>
                <th>Createdate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for client in clients %}
            <tr>
                <td><a href=\"{{ path('admin_client_show', { 'id': client.id }) }}\">{{ client.id }}</a></td>
                <td>{{ client.denomination }}</td>
                <td>{{ client.adresse }}</td>
                <td>{{ client.telephone }}</td>
                <td>{{ client.nomContact }}</td>
                <td>{{ client.fonctionContact }}</td>
                <td>{{ client.etat }}</td>
                <td>{{ client.commentaire }}</td>
                <td>{{ client.createDate }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_client_show', { 'id': client.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_client_edit', { 'id': client.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_client_new') }}\">Create a new client</a>
        </li>
    </ul>
{% endblock %}
", "client/index.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\client\\index.html.twig");
    }
}
